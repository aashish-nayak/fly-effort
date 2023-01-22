<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Razorpay\Api\Api as API;
use Illuminate\Support\Str;

class RazorpayController extends Controller
{
    public function razorpay($course_id,$order = '')
    {   
        $course = config('courses')->where('slug',$course_id)->firstOrFail();
        $orderData = [
            'receipt'         => Str::random(),
            'amount'          => (int)$course['price']."00",
            'currency'        => 'INR',
            'notes'           => array('course_id'=> $course['id'])
        ];
        $api = new API(env('RAZOR_KEY'), env('RAZOR_SECRET'));
        $razorpayOrder = $api->order->create($orderData);
        return view('payment',compact('course','razorpayOrder'));
    }

    public function payment(Request $request)
    {   
        $input = $request->all();
        $api = new API(env('RAZOR_KEY'), env('RAZOR_SECRET'));
        if(count($input)  && !empty($input['razorpay_payment_id'])) 
        {
            try 
            {
                $payment = $api->payment->fetch($input['razorpay_payment_id']);
                $course = config('courses')->where('id',$request->course_id)->firstOrFail();
                $order = new Order();
                $order->order_id = Str::random();
                $order->price = number_format((float)$course['price'], 2, '.', '');
                $order->user_id = auth('web')->id();
                $order->course_id = $course['id'];
                $order->course_name = $course['course_name'];
                $order->payment_id = $payment->id;
                $order->method = $payment->method;
                $order->parcel_status = ($payment->status != 'failed') ? 'dispatched' : 'failed';
                $order->payment_status = ($payment->status != 'failed') ? 'paid' : 'failed';
                if($payment->status != 'failed'){
                    $request->session()->flash('success','Payment successful, your order will be despatched in the next 48 hours.');
                }else{
                    $request->session()->flash('error','Payment Failed!');
                }
                $message = ['success'=>'Payment successful, your order will be despatched in the next 48 hours.'];
                $order->save();
            } 
            catch (\Exception $e) 
            {
                $message = ['error'=>$e->getMessage()];
            }
            return response()->json($message);
        }
    }
}
