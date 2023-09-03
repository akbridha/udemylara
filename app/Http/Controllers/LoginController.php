<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){



        return view('layouts.login');


    }

    public function handleLogin(LoginRequest $request){





        // awalnya validasi di sini aja. lalu untuk efisiensi diubah ke request
        // $request->validate([
        //     'name' => ['required','alpha', 'min:6', 'max:49'], // untuk mengecek apakah nama alphabet minimal 6 maksimal 49
        //     'email' => ['required', 'email'],
        //     'password' => ['required']
        // ],
        // [

        //     // pesan validasi CUstom

        //     'name.required' => 'Nama pengguna Wajib diisi',
        //     'name.alpha' => 'Nama pengguna hanya berisi Huruf',
        //     'email.email' => 'Berikan Format Email yang Valid'



        // ]);

       return $request;





    }
}
