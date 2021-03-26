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

Route::get('/', function (){
    return view('welcome');
});

Route::get('/hello', function(){
	return 'Hello World';
});

Route::get('/belajar',function(){
	echo '<h1> Hello World </h1>';
	echo '<p>Sedang Belajar laravel</p>';
});

Route::get('page/{nomor}', function($nomor){
	return 'Ini Halaman ke-' .$nomor;
});

Route::get('/kahyangan', function () {
  return view('kahyangan');
});