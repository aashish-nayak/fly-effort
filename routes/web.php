<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CashfreeController;
use App\Http\Controllers\RazorpayController;
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

Route::middleware(['auth'])->group(function(){
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
});
