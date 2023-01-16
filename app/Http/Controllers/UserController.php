<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function profile()
    {
        return view('profile');
    }

    public function courses()
    {
        $courses = config('courses')->whereIn('id',Order::where('payment_status','paid')->select('course_id')->get()->pluck('course_id'));
        return view('courses',compact('courses'));
    }

    public function orders()
    {
        $orders = Order::with('user')->get();
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
        return view('single-course',compact('course'));
    }

    public function profile_update(Request $request)
    {
        $user = User::find(auth()->id());
        $user->dp = $this->uploader($request,'dp',$user);
        $user->profile_complete = 1;
        $user->aadhar_front = $this->uploader($request,'aadhar_front',$user);
        $user->aadhar_back = $this->uploader($request,'aadhar_back',$user);
        $user->last_qualification = $this->uploader($request,'last_qualification',$user);
        $user->fill($request->except('_token','dp','aadhar_front','aadhar_back','last_qualification'));
        $user->save();
        return redirect()->route('profile');
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
        return null;
    }
}
