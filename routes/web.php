<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\PasswordResetController;

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

Route::get('/',function(){
    return view('index');
});

Route::get('forgot-password',[PasswordResetController::class,'index'])->name('forgot_password_index');
Route::post('forgot-password',[PasswordResetController::class,'password_reset'])->name('forgot_password');
Route::get('reset-password',[PasswordResetController::class,'index']);
Route::post('reset-password',[PasswordResetController::class,'resetPasswordForm'])->name('password_reset');

Route::get('sign-up',[RegisterController::class,'index'])->name('register_index');
Route::post('sign-up',[RegisterController::class,'register'])->name('register');

Route::get('login',[LoginController::class,'index'])->name('login_index');
Route::post('login',[LoginController::class,'login'])->name('login');