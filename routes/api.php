<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/transactionresponse',[App\Http\Controllers\Mpesa\MpesaResponseController::class, 'response'])->name('transactionresponse');
Route::get('/register_url',[App\Http\Controllers\Mpesa\MpesaRegisterUrlController::class, 'index'])->name('register_url');
Route::get('/confirmation_url',[App\Http\Controllers\Mpesa\MpesaConfirmationController::class, 'index'])->name('confirmation_url');
Route::get('/validation_url',[App\Http\Controllers\Mpesa\MpesaValidationController::class, 'index'])->name('validation_url');