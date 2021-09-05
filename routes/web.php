<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\OnlineApplication;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BankController;
use App\Http\Controllers\Client\CheckoutController;
use App\Http\Controllers\Admin\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/register', '/reserve');

// On Boarding
Route::get('/reserve', [OnlineApplication::class, 'onBoarding']);
Route::post('/reserve/process', [OnlineApplication::class, 'onBoardingCreate'])->name('reserve.create');

// Banking
Route::resource('/bank', BankController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [RedirectController::class, 'guard'])->name('dashboard');

Route::get('/payment/history', function() {
    return view('client.payment-history');
});

Route::get('/payment/option', function() {
    return view('client.payment-option');
});

// Billing Section

// User Management
Route::resource('user', UserController::class);

// Payment
Route::resource('checkout', CheckoutController::class);
Route::get('{checkout}/deposit/instruction', [CheckoutController::class, 'instruction'])->name('deposit.instruction');
Route::get('{checkout}/deposit/upload', [CheckoutController::class, 'verification'])->name('deposit.upload');
Route::patch('checkout/{deposit}/upload', [CheckoutController::class, 'verificationProcess'])->name('deposit.upload.process');
Route::view('payment/success','partials.paymentStatus');

// Product
Route::resource('/product', ProductController::class);


