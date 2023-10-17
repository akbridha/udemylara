<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
// use File;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     /*contoh menggunakan middleware di controller*/
    // public function __construct(){

    //     $this->middleware('authCheck2')->only(['create', 'show']);
    // }


    public function index()
    {



        // $posts = Post::paginate(2);



        // menggunakan cache
        // $posts = Cache::remember('posts', 60 , function(){ /*durasi penyimpanan dalam detik*/
        // $posts = Cache::rememberForever('posts' , function(){ /*cache selamanya*/
            $posts = Cache::remember('posts-page-'.request('page',1), 5 , function(){ /*untuk menangani cache dengan pagination*/
            return Post::with('category')->paginate(3);
        });
        return view('layouts.index', compact('posts'));
        //
    }

    public function create()
    {
        $categories = Category::all();
        return view('layouts.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'max:2028', 'image'],
            'title' => ['required', ' max:255' ],
            'category_id' => ['required', 'integer'],
            'description' => ['required']
        ]);
        $fileName = time().'_'.$request->image->getClientOriginalName();
        $filePath = $request->image->storeAs('uploads', $fileName);
        $post = New Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->image = 'storage/'.$filePath;
        $post->save();
        return redirect()->route('posts.index');
        return "welcome stranger" ;
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        // return $posts;
        return view('layouts.show',compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('layouts.edit', compact('post' , 'categories') );
    }

    public function update(Request $request, $id)
    {
        // return $request;
        $request->validate([
            'title' => ['required', ' max:255' ],
            'category_id' => ['required', 'integer'],
            'description' => ['required']
        ]);
        $post = Post::findOrFail($id);
        if($request->hasFile('image')){
            $request->validate([
                'image' => ['required', 'max:2028', 'image'], ]);
                $fileName = time().'_'.$request->image->getClientOriginalName();
                $filePath = $request->image->storeAs('uploads', $fileName);
                File::delete(public_path($post->image));
                $post->image = 'storage/'.$filePath;
        }

        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->save();
        return redirect()->route('posts.index');
    }

            /**
             * Remove the specified resource from storage.
             */
    public function destroy($id)
    {
    $post = Post::findOrFail($id);
    $post->delete();
    return redirect()->route('posts.index');
    }

    public function trashed(){
        $posts = Post::onlyTrashed()->get();
        return view('layouts.trashed',compact('posts'));
    }

    public function restore($id){

        $post = Post::onlyTrashed()->findOrFail($id);
        $post->restore();
        return redirect()->route('posts.index');
    }

    public function forceDelete($id){

        $post = Post::onlyTrashed()->findOrFail($id);
        File::delete(public_path($post->image));
        $post->forceDelete();

    return redirect()->route('posts.index');
    }
    }
