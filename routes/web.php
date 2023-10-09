<?php

use App\Http\Controllers\PostController;
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


/*contoh menggunakan middleware di route yang sudah di'group'kan*/
// Route::group(["middleware" => "authCheck"], function(){
//     Route::get('/dashboard', function () {return view('layouts.dashboard');});
//     Route::get('/dashboardd', function () {return view('layouts.dashboardd');});
//     Route::get('/profile', function () {return view('layouts.profile');});

// });

Route::get('/dashboard', function () {return view('layouts.dashboard');});
Route::get('/dashboardd', function () {return view('layouts.dashboardd');});
Route::get('/profile', function () {return view('layouts.profile');});

Route::get('/', function () {return view('welcome');});
Route::get('/posts/{id}/restore',[PostController::class, 'restore'])->name('posts.restore');
Route::get('/posts/trash', [PostController::class, 'trashed'])->name('posts.trashed');
/*contoh menggunakan middleware diroute tertentu*/
// Route::resource('posts', PostController::class)->middleware('authCheck2');
Route::resource('posts', PostController::class);


Route::delete('/posts/{id}/force-delete',[PostController::class, 'forceDelete'])->name('posts.force_delete');
Route::get('/unavailable', function(){
    return view('layouts.unavailable');
})->name('unavailable');
