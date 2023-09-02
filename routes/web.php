<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
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

Route::get('/home', HomeController::class);


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


Route::get('about', [AboutController::class, 'index']);

Route::resource('blog', BlogController::class);
