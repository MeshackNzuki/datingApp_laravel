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

//terms
Route::get('/terms', [App\Http\Controllers\TermsController::class, 'index'])->name('terms');

//signup
Route::get('/signup', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('index');
Route::get('/login-view', [App\Http\Controllers\Auth\LoginController::class, 'loginView'])->name('/login-view');

Route::post('signup_store', [App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('signup_store');

//mpesa
Route::post('/transact',[App\Http\Controllers\Mpesa\MpesaController::class, 'transact'])->name('transact');
Route::post('/transactionresponse',[App\Http\Controllers\Mpesa\MpesaResponseController::class, 'response'])->name('transactionresponse');
Route::get('/registerUrl',[App\Http\Controllers\Mpesa\MpesaRegisterUrlController::class, 'index'])->name('registerUrl');
Route::get('/confirmationUrl',[App\Http\Controllers\Mpesa\MpesaConfirmationController::class, 'index'])->name('confirmationUrl');
Route::get('/validationUrl',[App\Http\Controllers\Mpesa\MpesaValidationController::class, 'index'])->name('validationUrl');


//Requests  - hookup
Route::post('request-hookup/{id}',[App\Http\Controllers\HookController::class, 'request_hookup'])->name('request-hookup');
Route::post('requests',[App\Http\Controllers\HookController::class, 'show'])->name('requests');
Route::post('accept-hookup/{id}',[App\Http\Controllers\HookController::class, 'accept_hookup'])->name('accept-hookup');
Route::post('decline-hookup/{id}',[App\Http\Controllers\HookController::class, 'decline_hookup'])->name('decline-hookup');
Route::post('decline-hookup/{id}',[App\Http\Controllers\HookController::class, 'decline_hookup'])->name('decline-hookup');

//settings
Route::get('/settings',[App\Http\Controllers\SettingsController::class, 'index'])->name('settings');

//profile pic
Route::post('/profile_pic',[App\Http\Controllers\ProfileController::class, 'profile_pic'])->name('profile_pic');

//for subscribed users
Route::middleware(['subscription', 'auth'])->group(function () {

    //activities
    Route::get('/activity', [App\Http\Controllers\ActivityController::class, 'index'])->name('activity');
    //browse
    Route::get('/browse', [App\Http\Controllers\BrowseController::class, 'index'])->name('browse');
});