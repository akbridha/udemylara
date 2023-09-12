<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    //



    public function index(){
        // Storage::disk('public')->delete('yeyenkencenk.jpg');



        return view('layouts.upload');
    }



    public function handleImage(Request $request){



        $request->validate([
            'image' => [
                'required',
                'min:100',
                'max:500',
                'mimes:png,jpg',]
                // 'image'
            ]);

            $request->image->storeAs('/','yeyenkencenk.jpg');
            return view('layouts.upload');
    //   if($request){
    //     return "succes";
    //   }
    }
}
