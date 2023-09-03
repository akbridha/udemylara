<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
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

Route::get('/home', HomeController::class);
Route::get('about', [AboutController::class, 'index']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'handleLogin'])->name('login.submit');

// belum dibikin controller khususnya
Route::get('/', function (){return view('layouts.main');});
Route::get('welcoming_lara', function () { return view('welcome');});
Route::get('beranda', function () {$passing_data = "hello normies";    return view('layouts.beranda', compact('passing_data'));});
Route::get('landing', function (){return view('landing');});
Route::get('welcome', function () {return view('layouts.welcome');});
Route::get('hubungi', function(){    return "<h1>ini daftar kontak </h1>";});
Route::resource('blog', BlogController::class);
