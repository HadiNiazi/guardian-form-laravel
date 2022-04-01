<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PdfController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('send-email', [MailController::class, 'sendEmail'])->name('send.email');
Route::get('/generate-pdf', [PdfController::class, 'generatePdf'])->name('generate.pdf');
Route::get('checkout', [PaymentController::class, 'checkout'])->name('checkout');
Route::post('payment-process', [PaymentController::class, 'processPayment'])->name('payment.process');
