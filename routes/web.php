<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('loginauth', [\App\Http\Controllers\Auth\LoginController::class, 'loginauth'])->name('loginauth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home/verifymobile', [App\Http\Controllers\HomeController::class, 'verifyMobileOTP'])->name('verifymobile');
Route::post('/home/verifyemail', [App\Http\Controllers\HomeController::class, 'verifyEmailOTP'])->name('verifyemail');
Route::post('/home/sendaadhaarotp', [App\Http\Controllers\HomeController::class, 'sendAadhaarOTP'])->name('sendaadhaarotp');
Route::post('/home/verifyaadhaar', [App\Http\Controllers\HomeController::class, 'verifyAadhaar'])->name('verifyaadhaar');
Route::post('/home/users/info/store', [App\Http\Controllers\HomeController::class, 'userinfostore'])->name('userinfostore');


Route::post('/verify-aadhaar', [App\Http\Controllers\HomeController::class, 'verifyAadhaar1']);
Route::post('/verify-otp', [App\Http\Controllers\HomeController::class, 'verifyOtp']);

// gst

Route::post('/verify-gst', [App\Http\Controllers\HomeController::class, 'verifyGst']);
Route::post('/verify-gst-otp', [App\Http\Controllers\HomeController::class, 'verifyGSTOtp']);

