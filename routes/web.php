<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CorrectionController;
use App\Http\Controllers\EssaySampleController;
use App\Http\Controllers\LetterSampleController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\TipsController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\PaymentController;
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

// Routes for site
Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('correction', [CorrectionController::class, 'index'])->name('correction_page');
Route::get('self-correction', [CorrectionController::class, 'create'])->name('self-correction');

Route::get('samples/{type}', [SampleController::class, 'index'])->name('samples');
Route::get('detailed-sample/{type}/{id}', [SampleController::class, 'show'])->name('detail_samples');


// Routes for Guest
Route::group(['middleware' => 'guest'], function () {
    Route::get('forgot-password', [PasswordResetController::class, 'index'])->name('forgot_password_index');
    Route::post('forgot-password', [PasswordResetController::class, 'password_reset'])->name('forgot_password');
    Route::get('reset-password', [PasswordResetController::class, 'index']);
    Route::post('reset-password', [PasswordResetController::class, 'resetPasswordForm'])->name('password_reset');

    Route::get('register', [RegisterController::class, 'index'])->name('register_index');
    Route::post('sign-up', [RegisterController::class, 'register'])->name('register');

    Route::get('login', [LoginController::class, 'index'])->name('login_index');
    Route::post('login', [LoginController::class, 'login'])->name('login');
});


Route::group(['middleware' => 'auth'], function () {

    // For Admin Routes only 
    Route::group(['middleware' => 'isAdmin', 'prefix' => 'admin'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin_homepage');
    });

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    // For User Routes only 
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', [UserController::class, 'index'])->name('user_homepage');
        Route::get('/become-supporter', [PaymentController::class, 'index'])->name('become_supporter');
    });
});
