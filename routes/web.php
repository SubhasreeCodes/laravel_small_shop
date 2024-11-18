<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\AuthController;

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

Route::prefix('invoice')->group(function () {
    // Route to generate and download the PDF invoice directly
    Route::get('pdf/{id}', [InvoiceController::class, 'streamInvoicePdf'])->name('invoice.streamPdf');

    // Route to send the PDF invoice to the customer's email
    Route::post('email/{id}', [InvoiceController::class, 'sendInvoiceEmail'])->name('invoice.sendEmail');
});

Route::get('/forget_password',[AuthController::class, 'forget_password'])->name('home.forget_password');