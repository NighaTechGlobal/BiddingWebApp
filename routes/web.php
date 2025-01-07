<?php

use App\Models\Tender;
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
//    $user_id = !empty(auth()->user()) ? auth()->user()->id  : 0;latest()->
    $tenders = Tender::orderBy('end_date', 'asc')->whereDate('end_date','>=',date('Y-m-d'))->take(3)->get();
    return view('frontend.welcome',compact('tenders'));
});
Route::post('loginauth', [\App\Http\Controllers\Auth\LoginController::class, 'loginauth'])->name('loginauth');

Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home/verifymobile', [App\Http\Controllers\HomeController::class, 'verifyMobileOTP'])->name('verifymobile');
Route::post('/home/verifyemail', [App\Http\Controllers\HomeController::class, 'verifyEmailOTP'])->name('verifyemail');
Route::post('/home/sendaadhaarotp', [App\Http\Controllers\HomeController::class, 'sendAadhaarOTP'])->name('sendaadhaarotp');
Route::post('/home/verifyaadhaar', [App\Http\Controllers\HomeController::class, 'verifyAadhaar'])->name('verifyaadhaar');
Route::post('/home/users/info/store', [App\Http\Controllers\HomeController::class, 'userinfostore'])->name('userinfostore');


Route::post('/verify-aadhaar', [App\Http\Controllers\HomeController::class, 'verifyAadhaar1']);
Route::post('/verify-otp', [App\Http\Controllers\HomeController::class, 'verifyOtp']);
Route::resource('tenders', App\Http\Controllers\TenderController::class);
// gst

Route::post('/verify-gst', [App\Http\Controllers\HomeController::class, 'verifyGst']);
Route::post('/verify-gst-otp', [App\Http\Controllers\HomeController::class, 'verifyGSTOtp']);

