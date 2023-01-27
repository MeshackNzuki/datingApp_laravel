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
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//payments
Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'index'])->name('payment');
//onboard
Route::get('/onboard', [App\Http\Controllers\OnboardController::class, 'index'])->name('onboard');
Route::post('/onboard_set_preferences', [App\Http\Controllers\OnboardController::class, 'create'])->name('onboard_set_preferences');
//browse
Route::get('/browse', [App\Http\Controllers\BrowseController::class, 'index'])->name('browse');
//terms
Route::get('/terms', [App\Http\Controllers\TermsController::class, 'index'])->name('terms');
//activities
Route::get('/activity', [App\Http\Controllers\ActivityController::class, 'index'])->name('activity');
//signup
Route::get('/signup', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('index');
Route::get('/login-view', [App\Http\Controllers\Auth\LoginController::class, 'loginView'])->name('/login-view');

Route::post('signup_store', [App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('signup_store');
//mpesa
Route::post('/transact',[App\Http\Controllers\MpesaController::class, 'transact'])->name('transact');
Route::post('/transactionresponse',[MpesaResponse::class, 'response'])->name('transactionresponse');
