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

Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function () {

    $passing_data = "hello normies";
    return view('beranda', compact('passing_data'));

});

Route::get('home', function ()

{

    return view('home');

});


Route::get('hubungi', function(){
    return "<h1>ini daftar kontak </h1>";
});
