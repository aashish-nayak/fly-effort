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
        $course = config('courses')->where('id',$course_id)->firstOrFail();
        if($order != ''){
            $order = Order::where('order_id',$order)->where('payment_status','pending')->first();
        }else{
            $order = new Order();
            $order->order_id = Str::random();
            $order->price = number_format((float)$course['price'], 2, '.', '');
            $order->user_id = auth('web')->id();
            $order->course_id = $course['id'];
            $order->course_name = $course['course_name'];
            $order->payment_status = 'pending';
            $order->save();
        }
        return view('payment',compact('course','order'));
    }

    public function payment(Request $request)
    {   
        $input = $request->all();
        $api = new API(env('RAZOR_KEY'), env('RAZOR_SECRET'));
        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if(count($input)  && !empty($input['razorpay_payment_id'])) 
        {
            try 
            {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 
                $order = Order::where('order_id',$request->order_id)->where('payment_status','pending')->first();
                $order->payment_id = $response->id;
                $order->method = $response->method;
                $order->parcel_status = 'dispatched';
                $order->payment_status = 'paid';
                $order->save();
                $request->session()->flash('success','Payment successful, your order will be despatched in the next 48 hours.');
                return redirect()->route('courses');
            } 
            catch (\Exception $e) 
            {
                $request->session()->flash('error',$e->getMessage());
                return redirect()->back();
            }            
        }
    }
}
