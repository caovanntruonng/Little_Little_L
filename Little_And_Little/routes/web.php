<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
use App\Http\Controllers\ContactController;

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

// home page
Route::get('/', [myController::class, 'showIndex']);


// event page
Route::get('/eventpage', [myController::class, 'showEvent']);
Route::get('/eventdetailspage/{id}', [myController::class, 'showEventDetails'])->name('event.show');

// contact page
Route::get('/contactpage', [myController::class, 'showContact']);
Route::post('/contactpage', [ContactController::class, 'sendContact'])->name('contact.send');

// payment page
Route::post('/paymentpage', [myController::class, 'showPayment'])->name('payment.show');
Route::get('/paymentpage', [myController::class, 'showPaymentIndex']);

// successful payment page
Route::post('/successfulpaymentpage', [myController::class, 'showPaymentSuccess'])->name('payment.success');
Route::get('/successfulpaymentpage', [myController::class, 'showPaymentSuccessIndex']);
Route::get('/send-email', [myController::class, 'sendOrder'])->name('email.send');
Route::get('/generatePDF', [myController::class, 'generatePDF'])->name('generatePDF');
