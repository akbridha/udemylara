<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

</head>
@extends('layouts.main')
<body>




 @section('content')
 <header>
    <h1>Selamat Datang</h1>
</header>
    <main>
        <h2>Tentang Kami</h2>
        <p>
            Ini adalah contoh tampilan HTML sederhana untuk pemula. Kami adalah sebuah situs web yang menyediakan informasi dan sumber daya untuk belajar HTML, CSS, dan pemrograman web lainnya.
        </p>
        <img src="gambar.jpg" alt="Contoh Gambar">
        <p>
            Untuk mempelajari lebih lanjut, silakan kunjungi <a href="https://www.example.com">situs web kami</a>.
        </p>



        <div class="row">




            @foreach ( $posts as $post )





    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h4>{{$post->title}}</h4>
                <p>{{$post->description}}</p>

                <ul>
                    @foreach ($post->tags as $tag )
                    <li> {{ $tag->name }}</li>

                    @endforeach


                </ul>
            </div>
        </div>
    </div>


    @endforeach


        </div>
    </main>


    <footer>
        <p>&copy; 2023 Tampilan Sederhana</p>
    </footer>

    @endsection

</body>
</html>
