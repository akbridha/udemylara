<?php

use App\DataTables\UsersDataTable;
use App\Events\UserRegistered;
use App\Helpers\ImageFilter;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Jobs\SendMail;
use App\Mail\PostPublished;
use App\Models\Post;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Intervention\Image\ImageManagerStatic;

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

Route::get('user/{id}/edit', function($id){
    return $id;
})->name('user.edit');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function (UsersDataTable $dataTable) {
    return $dataTable->render('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('users', function (UsersDataTable $dataTable) {

    return $dataTable->render('layouts.dashboard');
});



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


Route::get('users', function (UsersDataTable $dataTable) {

    return $dataTable->render('layouts.dashboard');
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

Route::get('greeting/{locale}', function($locale){
    App::setLocale($locale);
    return view('greeting')
    ;
})->name('greeting');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/gambar', function(){

    $gambar = ImageManagerStatic::make('IMG_0267.jpg');
    // $gambar ->fit(600, 600);
    // $gambar -> save('HasilEdit.jpg',80);
    // $gambar->filter(new ImageFilter(100));
    $gambar->filter(new ImageFilter());

    return $gambar->response();
    // return redirect()->Route('home');
});
