<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        // return view('layouts.home');




        #ambil semua
        // return Post::all();
        #ambil salah satu saja
        // return Post::find(2);
        #ambil & menampilkan data lain dari id yang ditemukan "find()"
        // $post = Post::find(2);
        // return $post->title;
        #ambil menampilkan data lain dari id yang ditemukan "find()" + antisipasi error
        //  return Post::findOrFail(18);
        #ambil semua data tetapi yg ditampilkan salah satu kolom saja
        // $posts = Post::all();
        // foreach($posts as $post){
            //     echo $post->title;
            //     echo "\n";
            // }
            // $data = Post::where ('views', '<', 200)->where('id', '<', 20)->get();
            // $jumlah = count($data);
            // return   $data . "\n" . "jumlah :" ."\n" . $jumlah ;
            // return $data = Post::where ('views', '=', 190)->orWhere('id', '=', 16)->get();
            #tes menghapus data dengan soft Deleete
            // Post::where('id', '<', 11)->delete();
            // dd('succes');
            // return $posts = Post::all();
            #Menampilkan semua data di dalam soft delete
            // return Post::onlyTrashed()->get();
            #Mengembalikan (restore) data yang soft delete
            // Post::withTrashed()->where('id', '<', 11)->restore();
            // $blogs = [
                //     [
                    //         'title' => 'Judul 1',
                    //         'body' => 'body dari artiker Judul 1',
                    //         'status' => 0
                    //     ],
                    //     [
    //         'title' => 'Judul 2',
    //         'body' => 'body dari artiker Judul 2',
    //         'status' => 1
    //     ],
    //     [
        //         'title' => 'Judul 3',
        //         'body' => 'body dari artiker Judul 3',
        //         'status' => 1
        //     ],
        //     [
            //         'title' => 'Judul 4',
            //         'body' => 'body dari artiker Judul 4',
            //         'status' => 0
            //     ],
            //     [
                //         'title' => 'Judul 5',
                //         'body' => 'body dari artiker Judul 5',
                //         'status' => 0
                //     ],
                //     [
                    //         'title' => 'Judul 6',
                    //         'body' => 'body dari artiker Judul 6',
                    //         'status' => 1
                    //     ],
                    // ];

                    // $Categories = Category::find(4)->posts;

                    // return $Categories;



                    $posts = Post::with('tags')->get();
                    $tag = Tag::first();

                    // $posts->tags()->attach([2,3,4]);

                    // $post->tags()->attach($tag);
                    // return $posts;

                   return "ini home COntroller";
                }
            }
