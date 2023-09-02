<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

public function index(){





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

}
}
