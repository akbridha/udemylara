<?php

use App\Http\Controllers\PostController;
use App\Mail\OrderShipped;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
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


Route::get('contact', function(){

    $posts = Post::all();
    return view('layouts.contact', compact('posts'));
});

Route::get('send-email', function () {
    // Mail::raw('Pampam parepam parararampang papipipam', function ($message) {
    //     $message->to('john@johndoe.com')->subject('noreply');
    // });
    Mail::send(new OrderShipped);
    dd('success');
});

Route::get('get-session', function (Request $request) {
    $data = session()->all();
    // $data = session()->get('nama');

    dd($data);

});

Route::get('save-session', function (Request $request) {

    // $request->session()->put('nama','panjulll');
    $request->session()->put(['nama'=>'panjulll', 'wilayah'=>'kreta' ]);
    session(['kaiser'=>'lucretius']);
    return redirect('get-session');
});


Route::get('delete-session', function (Request $request) {
    // $request->session()->forget(['kaiser','wilayah']);
    session()->flush();
    return redirect('get-session');

});

Route::get('flash-session', function (Request $request) {

    $request->session()->flash('Login', 'ora');

    return redirect('get-session');

});


Route::get('forget-cache', function(){
    Cache::forget(('posts'));
    return redirect()->route('posts.index');
});


require __DIR__.'/auth.php';
