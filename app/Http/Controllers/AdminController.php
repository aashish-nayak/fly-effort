<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Assignment;
use App\Models\Internship;
use App\Models\Order;
use App\Models\Promocode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalOrders = Order::where('payment_status','paid')->count();
        $totalUsers = User::where('status',1)->count();
        $totalInterns = Internship::count();
        return view('admin.dashboard',compact('totalOrders','totalUsers','totalInterns'));
    }

    public function notification_save(Request $request)
    {
        Admin::find(auth('admin')->id())->update(['notification' => $request->notification]);
        $request->session()->flash('success', 'Data Saved !');
        return redirect()->route('admin.notification');
    }

    public function notification()
    {
        $notification = Admin::select('notification')->find(auth('admin')->id());
        return view('admin.notification',compact('notification'));
    }

    public function users()
    {
        $users = User::latest()->get();
        return view('admin.users', compact('users'));
    }

    public function user_info($user_id)
    {
        $user = User::with('orders')->find($user_id);
        $assignments = Assignment::where('user_id',$user_id)->whereIn('course_id',$user->orders->where('payment_status','paid')->pluck('course_id')->toArray())->latest()->get();
        return view('admin.user_info', compact('user','assignments'));
    }

    public function orders()
    {
        $orders = Order::latest()->get();
        return view('admin.orders', compact('orders'));
    }

    public function coupons($id = '')
    {
        $edit = '';
        if($id != ''){
            $edit = Promocode::find($id);
        }
        $promos = Promocode::withCount('users')->latest()->get();
        return view('admin.coupons',compact('promos','edit'));
    }

    public function coupon_delete($id)
    {
        try {
            Promocode::find($id)->delete();
            request()->session()->flash('success','Promo Code Deleted!');
        } catch (\Exception $e) {
            request()->session()->flash('error',$e->getMessage());
        }
        return redirect()->back();
    }

    public function coupon_create(Request $request)
    {
        try {
            if($request->has('id')){
                $promo = Promocode::find($request->id);
                $message = 'PromoCode Updated';
            }else{
                $promo = new Promocode();
                $message = 'PromoCode Generated';
            }
            $promo->coupon = strtoupper(str_replace(' ','',$request->coupon));
            $promo->type = $request->type;
            $promo->value = $request->value;
            $promo->status = $request->status;
            $promo->save();
            $request->session()->flash('success',$message);
        } catch (\Exception $e) {
            $request->session()->flash('error',$e->getMessage());
        }
        return redirect()->route('admin.coupons');
    }

    public function internships()
    {
        $interns = Internship::latest()->get();
        return view('admin.internships', compact('interns'));
    }

    public function assign_delete($assign_id)
    {
        $assign = Assignment::find($assign_id);
        if (Storage::exists('public/user_data/'.$assign->user_id .'/'. $assign->assignment)) {
            Storage::delete('public/user_data/'.$assign->user_id .'/'. $assign->assignment);
        }
        $assign->delete();
        request()->session()->flash('success','Assignment Deleted');
        return redirect()->back();
    }

    public function result_upload(Request $request)
    {
        if($request->hasFile('result')){
            $order = Order::with('user')->find($request->order_id);
            
            if($order->result != '' && Storage::exists('public/user_data/'.$order->user_id .'/'. $order->result)){
                Storage::delete('public/user_data/'.$order->user_id .'/'. $order->result);
            }

            $file = $request->file('result');
            $extension = $file->getClientOriginalExtension();
            $filename =  'result___' .  $order->user->email . '__' .  time() . '.' . $extension;
            $file->storeAs('public/user_data/'.$order->user_id, $filename);
            
            $order->result = $filename;
            $order->save();
            $request->session()->flash('success','Result Upladed Successfully !');
        }
        return redirect()->back();
    }

    public function assign_upload(Request $request)
    {
        if($request->hasFile('assignment')){
            $user = User::find($request->user_id);
            $assignment = new Assignment();
            $assignment->user_id = $user->id;
            $assignment->course_id = $request->course_id;

            $file = $request->file('assignment');
            $extension = $file->getClientOriginalExtension();
            $filename =  'assignment___' .  $user->email . '__' .  time() . '.' . $extension;
            $file->storeAs('public/user_data/'.$user->id, $filename);
            
            $assignment->upload_by = 'admin';
            $assignment->assignment = $filename;
            $assignment->save();
            $request->session()->flash('success','Assignment Upladed Successfully !');
        }
        return redirect()->back();
    }
}
