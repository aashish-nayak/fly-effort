<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CashfreeController extends Controller
{
    public function order($slug,$order = '')
    {
        $env = (config('app.env') == 'local') ? 'https://sandbox.cashfree.com/pg/' : 'https://api.cashfree.com/pg/';
        $course = config('courses')->where('slug',$slug)->firstOrFail();
        if(!session()->exists(Str::replace('-','_',$course['slug']))){
            $client = new \GuzzleHttp\Client();
    
            $response = $client->request('POST', $env.'orders', [
                'headers' => [
                    'accept' => 'application/json',
                    'content-type' => 'application/json',
                    "x-api-version" => "2022-09-01",
                    "x-client-id" => config('cashfree.appID'),
                    "x-client-secret" => config('cashfree.secretKey')
                ],
                'body' => '{
                    "order_id": "order_'.Str::random().'",
                    "order_amount": '.number_format((float)$course['price'], 2, '.', '').',
                    "order_currency":"INR",
                    "customer_details": {
                        "customer_id":"'.auth('web')->id().'",
                        "customer_name":"'.auth('web')->user()->name.'",
                        "customer_email":"'.auth('web')->user()->email.'",
                        "customer_phone":"'.auth('web')->user()->phone.'"
                    },
                    "order_expiry_time": "'. now()->addDay()->toIso8601String() .'",
                    "order_note":"Course Order"
                }',
            ]);
    
            $body = json_decode($response->getBody());
            Session::put(Str::replace('-','_',$course['slug']),$body->payment_session_id);
        }
        return view('payment',compact('course'));
    }

    public function payment(Request $request)
    {
        if(!empty($request->response_data)) {
            try 
            {
                $response = json_decode($request->response_data);
                $course = config('courses')->where('id',$request->course_id)->firstOrFail();
                $order = new Order();
                $order->order_id = $response->order->orderId;
                $order->price = number_format((float)$response->transaction->transactionAmount, 2, '.', '');
                $order->user_id = auth('web')->id();
                $order->payment_type = 'course';
                $order->course_id = $course['id'];
                $order->course_name = $course['course_name'];
                $order->payment_id = $response->transaction->transactionId;
                $order->method = (!empty($response->order->activePaymentMethod)) ? $response->order->activePaymentMethod : 'previous-method';
                $order->parcel_status = ($response->transaction->txStatus != 'FAILED') ? 'dispatched' : 'failed';
                $order->payment_status = ($response->transaction->txStatus != 'FAILED') ? 'paid' : 'failed';
                $order->save();
                
                if($response->transaction->txStatus != 'FAILED'){
                    if(session()->exists(Str::replace('-','_',$course['slug']))){
                        session()->forget(Str::replace('-','_',$course['slug']));
                    }
                    $message = 'Payment successful, your order will be despatched in the next 48 hours.';
                    $request->session()->flash('success',$message);
                }else{
                    $message = 'Payment Failed!';
                    $request->session()->flash('error',$message);
                }
            } 
            catch (\Exception $e) 
            {
                $message = ['error'=>$e->getMessage()];
            }
            return response()->json($message);
        }
    }
}
