<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Razorpay\Api\Api as API;

class RazorpayController extends Controller
{
    public function razorpay($course_id)
    {   
        $course =  Arr::where(config('courses'), function ($value, $key) use($course_id) {
            return ($value['id'] == $course_id) ? $value : [];
        });
        $course = (count($course) > 0) ? $course[0] : [];
        return view('payment',compact('course'));
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
            } 
            catch (\Exception $e) 
            {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back();
            }            
        }
        dd($response);
        // Session::put('success', 'Payment successful, your order will be despatched in the next 48 hours.');
        // return redirect()->back();
    }
}
