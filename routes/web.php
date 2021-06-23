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

Route::get('/product', function () {
    return view('product');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/admin', function () {
    return view('');
});
Route::get('/home ', 'Home@view');
Route::get('/Category ', 'Home@Category');
Route::get('/Category1/{id} ', 'Home@Category1');
Route::get('/Category2/{id} ', 'Home@Category2');
Route::get('/Category3/{id} ', 'Home@Category3');
Route::get('/create ', 'Home@Create');
Route::post('/store','Home@store');
Route::get('/Products','Home@show');
