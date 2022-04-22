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



Route::any('/register', 'App\Http\Controllers\RegistrationController@index')->name('register');
Route::any('/registrationprocess', 'App\Http\Controllers\RegistrationController@registrationprocess')->name('registrationprocess');
Route::any('/login', 'App\Http\Controllers\LoginController@adminLogin')->name('adminLogin');
Route::any('/login/loginAdminProcess', 'App\Http\Controllers\LoginController@adminlogincheck')->name('adminlogincheck');

Route::any('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
Route::any('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');



// Route:get(‘google’,function(){

// Return view(‘googleAuth’);

// })

//Route::get('auth/google', 'Auth\LoginController@redirectToGoogle');

//Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleCallback');

