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
Route::get('/home', function () {
    return view('home');
});

Route::namespace('')->group(function () {
    Route::get('/login','App\Http\Controllers\LoginController@show_login_form')->name('login');
    Route::post('/login','App\Http\Controllers\LoginController@login')->name('process_login');
    Route::get('/register','App\Http\Controllers\LoginController@show_signup_form')->name('register');
    Route::post('/register','App\Http\Controllers\LoginController@process_signup');
    Route::post('/logout','App\Http\Controllers\LoginController@logout')->name('logout');
      });
  Route::get('/calculate','App\Http\Controllers\CalcController@calculate');
  Route::post('/history','App\Http\Controllers\CalcController@history');
  Route::get('/admin','App\Http\Controllers\CalcController@admin');



  Route::get('/process', ['as' => 'calculator.process',  'uses' => 'App\Http\Controllers\CalcController@calculate']);
// Route::get('/login', 'App\Http\Controllers\App\Http\Controllers\LoginController@login');
// Route::post('/register', 'App\Http\Controllers\App\Http\Controllers\LoginController@register');