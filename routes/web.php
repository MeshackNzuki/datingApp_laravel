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
Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'index'])->name('payment');
Route::get('/onboard', [App\Http\Controllers\OnboardController::class, 'index'])->name('onboard');
Route::get('/browse', [App\Http\Controllers\BrowseController::class, 'index'])->name('browse');
Route::get('/terms', [App\Http\Controllers\TermsController::class, 'index'])->name('terms');
//activities
Route::get('/activity', [App\Http\Controllers\ActivityController::class, 'index'])->name('activity');
//signup
Route::get('/signup', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('index');
Route::post('signup_store', [App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('signup_store');
