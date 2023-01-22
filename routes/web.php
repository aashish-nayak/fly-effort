<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CashfreeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__.'/admin_auth.php';
require __DIR__.'/auth.php';

Route::get('/', function () {
    $courses = config('courses');
    return view('welcome',compact('courses'));
})->name('home');

Route::post('/offline-internship',[UserController::class,'internship_submit'])->name('internship');

Route::middleware(['auth','verified'])->group(function(){
    Route::middleware('profile')->group(function(){
        Route::get('/dashboard', [UserController::class,'dashboard'])->name('dashboard');
        Route::get('/my-courses', [UserController::class,'courses'])->name('courses');
        Route::get('/orders', [UserController::class,'orders'])->name('orders');
        Route::get('/order-details/{order_id}', [UserController::class,'orders_details'])->name('order-details');
        Route::get('/single-course/{slug}', [UserController::class,'single'])->name('single');
        Route::get('/checkout-payment/{course_slug}/{order_id?}', [CashfreeController::class, 'order'])->name('razorpay');
        Route::post('/razorpaypayment', [CashfreeController::class, 'payment'])->name('payment');
        Route::post('/store-assignments', [UserController::class, 'assignment'])->name('assignment');
    });
    Route::post('/profile_update', [UserController::class,'profile_update'])->name('profile_update');
    Route::get('/profile', [UserController::class,'profile'])->name('profile');
    Route::post('/check-promo', [UserController::class,'check_promo'])->name('check_promo');
    Route::get('/user-checkout', [UserController::class,'register_checkout'])->name('user_checkout');
    Route::get('/user-payment', [UserController::class,'register_payment'])->name('user_payment');
    Route::post('/user-payment', [UserController::class,'payment'])->name('payment_save');
});

Route::middleware(['admin'])->name('admin.')->prefix('admin/')->group(function(){
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    Route::get('/users',[AdminController::class,'users'])->name('users');
    Route::get('/orders',[AdminController::class,'orders'])->name('orders');
    Route::get('/notification',[AdminController::class,'notification'])->name('notification');
    Route::post('/notification/save',[AdminController::class,'notification_save'])->name('notification.save');
    Route::get('/offline-internships',[AdminController::class,'internships'])->name('internship-queries');
    Route::get('/user/{user_id}',[AdminController::class,'user_info'])->name('user.info');
    Route::get('/assignment/delete{id}',[AdminController::class,'assign_delete'])->name('assignment.delete');
    Route::post('/upload-result',[AdminController::class,'result_upload'])->name('upload-result');
    Route::post('/upload-assignment',[AdminController::class,'assign_upload'])->name('upload-assignment');
    Route::post('/tracking-link',[AdminController::class,'tracking_link'])->name('tracking-link');
    Route::get('/coupons',[AdminController::class,'coupons'])->name('coupons');
    Route::get('/coupon/edit/{id}',[AdminController::class,'coupons'])->name('coupon.edit');
    Route::get('/coupon/delete/{id}',[AdminController::class,'coupon_delete'])->name('coupon.delete');
    Route::post('/coupon/create',[AdminController::class,'coupon_create'])->name('coupon.create');
});
