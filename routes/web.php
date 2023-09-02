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

Route::get('welcoming_lara', function () {
    return view('welcome');
});
Route::get('beranda', function () {

    $passing_data = "hello normies";
    return view('layouts.beranda', compact('passing_data'));

});

Route::get('home', function (){



    $blogs = [
        [
            'title' => 'Judul 1',
            'body' => 'body dari artiker Judul 1',
            'status' => 0
        ],
        [
            'title' => 'Judul 2',
            'body' => 'body dari artiker Judul 2',
            'status' => 1
        ],
        [
            'title' => 'Judul 3',
            'body' => 'body dari artiker Judul 3',
            'status' => 1
        ],
        [
            'title' => 'Judul 4',
            'body' => 'body dari artiker Judul 4',
            'status' => 0
        ],
        [
            'title' => 'Judul 5',
            'body' => 'body dari artiker Judul 5',
            'status' => 0
        ],
        [
            'title' => 'Judul 6',
            'body' => 'body dari artiker Judul 6',
            'status' => 1
        ],
    ];

    return view('layouts.home', compact('blogs'));

});


Route::get('landing', function ()
{
    return view('landing');

});


Route::get('hubungi', function(){
    return "<h1>ini daftar kontak </h1>";
});

Route::get('/', function ()

{
return view('layouts.main');
});

Route::get('welcome', function () {
    return view('layouts.welcome');

});


Route::get('about', function () {


    return view('layouts.about');
});
