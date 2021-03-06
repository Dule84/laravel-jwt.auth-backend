<?php

use Illuminate\Http\Request;

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
Route::get('/logout', ['uses' => 'UserController@getLogout', 'middleware' => 'jwt']);

Route::post('/quote', ['uses' => 'QuoteController@postQuote', 'middleware' => 'jwt']);

Route::get('/quotes', ['uses' => 'QuoteController@getQuotes']);

Route::put('/quote/{id}', ['uses' => 'QuoteController@putQuote', 'middleware' => 'jwt']);

Route::delete('/quote/{id}', ['uses' => 'QuoteController@deleteQuote', 'middleware' => 'jwt']);

Route::post('/user', ['uses' => 'UserController@signUp']);

Route::post('/user/sign', ['uses' => 'UserController@signIn']);