<?php

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
    $courses = config('courses',[]);
    return view('welcome',compact('courses'));
})->name('home');


Route::middleware(['auth'])->group(function(){
    Route::middleware('profile')->group(function(){
        Route::get('/dashboard', [UserController::class,'dashboard'])->name('dashboard');
        Route::get('/my-courses', [UserController::class,'courses'])->name('courses');
        Route::get('/checkout-payment/{course_id}', [RazorpayController::class, 'razorpay'])->name('razorpay');
        Route::get('/orders', [UserController::class,'orders'])->name('orders');
        Route::get('/order-details/{order_id?}', [UserController::class,'orders_details'])->name('order-details');
        Route::get('/single-course/{course_id}', [UserController::class,'single'])->name('single');
        Route::post('/razorpaypayment', [RazorpayController::class, 'payment'])->name('payment');
    });
    Route::post('/profile_update', [UserController::class,'profile_update'])->name('profile_update');
    Route::get('/profile', [UserController::class,'profile'])->name('profile');
});

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['admin'])->name('admin.dashboard');
