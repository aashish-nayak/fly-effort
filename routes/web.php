<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['admin'])->name('admin.dashboard');
