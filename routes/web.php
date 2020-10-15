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


Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/success', function () {
    return view('success');
});


Route::post('/store',"UserController@store");
Route::get('/logs',"UserController@logs");
Route::get('/logout',"UserController@logout");

Route::get('/success',"UserController@getData");
Route::get('/edit/{id}',"UserController@edit");
Route::post('/detail_update',"UserController@update");
Route::get('/success_destroy/{id}',"UserController@destroy");