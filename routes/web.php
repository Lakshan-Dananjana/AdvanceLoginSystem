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


Route::get('/',                                     'App\Http\controllers\pageController@login');
Route::get('/register',                             'App\Http\controllers\pageController@Register');
Route::get('/Ensure Email',                         'App\Http\controllers\pageController@forgetEmail');
Route::get('/OTP-verifing',                         'App\Http\controllers\pageController@otpVerify');
Route::get('/change-password',                         'App\Http\controllers\pageController@changePassword');