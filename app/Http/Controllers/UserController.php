<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Order;
use App\Models\User;
use App\Models\Assignment;
use App\Models\Internship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    public function dashboard()
    {
        $courseCount = Order::where('user_id',auth('web')->id())->where('payment_type','course')->where('payment_status','paid')->count();
        $orderCount = Order::where('user_id',auth('web')->id())->count();
        $noti = Admin::first();
        return view('dashboard', compact('courseCount','orderCount','noti'));
    }

    public function profile()
    {
        return view('profile');
    }

    public function courses()
    {
        $courses = config('courses')->whereIn('id',Order::where('user_id',auth('web')->id())->where('payment_status','paid')->select('course_id')->get()->pluck('course_id'));
        return view('courses',compact('courses'));
    }

    public function register_payment()
    {
        $env = (config('app.env') == 'local') ? 'https://sandbox.cashfree.com/pg/' : 'https://api.cashfree.com/pg/';
        $sessionKey = strtolower(Str::replace(' ','_',auth('web')->user()->name)).'__'.auth('web')->id();
        if(!session()->exists($sessionKey)){
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
                    "order_amount": '.number_format((float)config('app.register_fees'), 2, '.', '').',
                    "order_currency":"INR",
                    "customer_details": {
                        "customer_id":"'.auth('web')->id().'",
                        "customer_name":"'.auth('web')->user()->name.'",
                        "customer_email":"'.auth('web')->user()->email.'",
                        "customer_phone":"'.auth('web')->user()->phone.'"
                    },
                    "order_expiry_time": "'. now()->addDay()->toIso8601String() .'",
                    "order_note":"Student Registeration Fees"
                }',
            ]);
    
            $body = json_decode($response->getBody());
            Session::put($sessionKey,$body->payment_session_id);
        }
        return view('register-payment');
    }

    public function payment(Request $request)
    {
        if(!empty($request->response_data)) {
            $sessionKey = strtolower(Str::replace(' ','_',auth('web')->user()->name)).'__'.auth('web')->id();
            try 
            {
                $response = json_decode($request->response_data);

                $order = new Order();
                $order->user_id = auth('web')->id();
                $order->order_id = $response->order->orderId;
                $order->payment_id = $response->transaction->transactionId;
                $order->payment_type = 'register';
                $order->price = number_format((float)$response->transaction->transactionAmount, 2, '.', '');
                $order->method = (!empty($response->order->activePaymentMethod)) ? $response->order->activePaymentMethod : 'previous-method';
                $order->parcel_status = 'failed';
                $order->payment_status = ($response->transaction->txStatus != 'FAILED') ? 'paid' : 'failed';
                $order->save();
                
                if($response->transaction->txStatus != 'FAILED'){
                    if(session()->exists($sessionKey)){
                        session()->forget($sessionKey);
                    }
                    $user = User::find(auth('web')->id());
                    $user->status = 1;
                    $user->save();
                    $message = 'Registeration Payment successful!';
                    $request->session()->flash('success',$message);
                }else{
                    $message = 'Registeration Payment Failed!';
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

    public function orders()
    {
        $orders = Order::with('user')->where('user_id',auth('web')->id())->latest()->get();
        return view('orders',compact('orders'));
    }

    public function orders_details($order_id)
    {
        $order = Order::where('order_id',$order_id)->first();
        return view('order-details',compact('order'));
    }

    public function single($slug)
    {
        $course = config('courses')->where('slug',$slug)->firstOrFail();
        $assignments = Assignment::where('user_id',auth('web')->id())->where('course_id',$course['id'])->latest()->get();
        $order = Order::where('user_id',auth('web')->id())->where('course_id',$course['id'])->where('payment_status','paid')->select('id','result')->first();
        return view('single-course',compact('course','assignments','order'));
    }

    public function profile_update(Request $request)
    {
        $checkEmail = '';
        $checkPhone = '';
        if($request->email != auth('web')->user()->email){
            $checkEmail = 'unique:users';
        }
        if($request->phone != auth('web')->user()->phone){
            $checkPhone = 'unique:users';
        }
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255',$checkEmail],
            'phone' => ['required', 'numeric',$checkPhone],
            'shipping_address' => ['required', 'string', 'max:255'],
            'zip' => ['required', 'numeric'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
        ]);
        $user = User::find(auth()->id());
        $route = ($user->profile_complete != 0) ? route('profile') : route('dashboard');
        $user->dp = $this->uploader($request,'dp',$user);
        $user->profile_complete = 1;
        $user->aadhar_front = $this->uploader($request,'aadhar_front',$user);
        $user->aadhar_back = $this->uploader($request,'aadhar_back',$user);
        $user->last_qualification = $this->uploader($request,'last_qualification',$user);
        $user->fill($request->except('_token','dp','aadhar_front','aadhar_back','last_qualification'));
        $user->save();
        return redirect($route);
    }

    public function assignment(Request $request)
    {
        if($request->hasFile('assignment')){
            $file = $request->file('assignment');
            $extension = $file->getClientOriginalExtension();
            $filename =  'assignment___' .  auth()->user()->email . '__' .  time() . '.' . $extension;
            $file->storeAs('public/user_data/'.auth()->id(), $filename);
            
            $assignment = new Assignment();
            $assignment->user_id = auth('web')->id();
            $assignment->course_id = $request->course_id;
            $assignment->upload_by = 'user';
            $assignment->assignment = $filename;
            $assignment->save();
            $request->session()->flash('success','Assignment Uploaded Successfully!');
        }
        return redirect()->back();
    }

    public function internship_submit(Request $request)
    {
        $intern = new Internship();
        $intern->fill($request->except('_token'));
        $intern->save();
        $request->session('success','Thank you for getting Interested in our Course');
        return redirect()->back();
    }

    public function uploader($request,$uploadfile,$edit = null)
    {
        if($request->hasFile($uploadfile)){
            if($edit != null){
                $edit->deleteImage($uploadfile);
            }
            $file = $request->file($uploadfile);
            $extension = $file->getClientOriginalExtension();
            $filename =  $uploadfile .'___' .  $request->email . '__' .  time() . '.' . $extension;
            $file->storeAs('public/user_data/'.auth()->id(), $filename);
            return $filename;
        }
        return $edit[$uploadfile];
    }
}
