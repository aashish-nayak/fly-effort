<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Assignment;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function dashboard()
    {
        $courseCount = Order::where('user_id',auth('web')->id())->where('payment_status','paid')->count();
        $orderCount = Order::where('user_id',auth('web')->id())->count();
        return view('dashboard', compact('courseCount','orderCount'));
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
        $assignments = Assignment::where('user_id',auth('web')->id())->where('course_id',$course['id'])->get();
        return view('single-course',compact('course','assignments'));
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
        // dd($request->all());
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
