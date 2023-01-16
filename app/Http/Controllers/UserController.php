<?php

namespace App\Http\Controllers;

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
        return view('courses');
    }

    public function orders()
    {
        return view('orders');
    }

    public function orders_details($order_id = '')
    {
        return view('order-details');
    }

    public function single($course_id)
    {
        $course =  Arr::where(config('courses'), function ($value, $key) use($course_id) {
            return ($value['id'] == $course_id) ? $value : [];
        });
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
