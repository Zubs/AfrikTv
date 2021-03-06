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

Route::get('/about', 'PagesController@about');
Route::get('/explore', 'MoviesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
	Paystack work
*/
Route::get('/pay', 'PagesController@pay');
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

Route::get('/test', function () {
	return view('test');
});