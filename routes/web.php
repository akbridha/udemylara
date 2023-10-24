<?php

use App\Events\UserRegistered;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Jobs\SendMail;
use App\Mail\PostPublished;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::get('/', function () {return view('welcome');});

Route::group(['middleware' => 'auth'], function(){/*Grouping route untuk dipasang auth */
    Route::get('/posts/{id}/restore',[PostController::class, 'restore'])->name('posts.restore');
    Route::get('/posts/trash', [PostController::class, 'trashed'])->name('posts.trashed');
    /*contoh menggunakan middleware diroute tertentu*/
    // Route::resource('posts', PostController::class)->middleware('authCheck2');
    Route::resource('posts', PostController::class);
    Route::delete('/posts/{id}/force-delete',[PostController::class, 'forceDelete'])->name('posts.force_delete');
    Route::get('/unavailable', function(){
        return view('layouts.unavailable');
    })->name('unavailable');

});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('contact', function(){

    $posts = Post::all();
    return view('layouts.contact', compact('posts'));
});

Route::get('user-data', function () {
    return Auth::user();

});


//di sini diletakkan semua file halaman login
require __DIR__.'/auth.php';


Route::get('send-mail', function () {

    SendMail::dispatch();

    dd('mail has been plantid');
});


Route::get('user-registered', function(){
    $alamath = 'panjul@daw.com';

    event(new UserRegistered($alamath));
    dd('Psean Trukrima');
});
