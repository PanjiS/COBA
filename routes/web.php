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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','LoginController@index');
Route::get('/login','LoginController@login');
Route::post('/home' , 'LoginController@loginProses');

// Route::get('/dashboard', 'PageController@dashboard');
// Route::get('/logout','LoginController@logout');
