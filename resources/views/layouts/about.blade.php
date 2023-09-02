<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Sederhana</title>

</head>
@extends('layouts.main')
<body>




 @section('content')
 <header>
    <h1>Tentang Kami</h1>
</header>
    <main>
        <h2>About Us</h2>
        <p>
            Ini adalah contoh tampilan HTML sederhana untuk pemula. Kami adalah sebuah situs web yang menyediakan informasi dan sumber daya untuk belajar HTML, CSS, dan pemrograman web lainnya.
        </p>
        <img src="gambar.jpg" alt="Contoh Gambar">
        <p>
            Untuk mempelajari lebih lanjut, silakan kunjungi <a href="https://www.example.com">situs web kami</a>.
        </p>
    </main>




    @endsection

</body>
</html>
