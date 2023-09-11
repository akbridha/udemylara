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
    <h1>Selamat Datang {{ count($Categories) }}</h1>
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




            @foreach ( $Categories as $category )
            <div class="btn-sm btn-success">{{ $category->category }}</div>
            @if ($category['id'] <= 2)

            <div class="col-md-4">
                <div class="card">
            <div class="card-body">
                <h4>{{ $category->name }}</h4>
                <p>{{ $category->id }}</p>
                <div class="btn-sm btn-success">{{ $category->category->name }}</div>

            </div>
        </div>
    </div>
    @else

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h4>{{ $category->name }}</h4>
                <p>{{ $category->id }}</p>

                <div class="btn-sm btn-success">{{ $category->category->name }}</div>

            </div>
        </div>
    </div>

    @endif
    @endforeach


        </div>
    </main>


    <footer>
        <p>&copy; 2023 Tampilan Sederhana</p>
    </footer>

    @endsection

</body>
</html>
