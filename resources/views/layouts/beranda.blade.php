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
 <div class="container mt-5">
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jadwal</h5>
                    <p class="card-text">Lihat jadwal kami.</p>
                    <a href="#" class="btn btn-primary">Buka</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Info</h5>
                    <p class="card-text">Dapatkan informasi terbaru.</p>
                    <a href="#" class="btn btn-primary">Buka</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Kontak</h5>
                    <p class="card-text">Hubungi kami.</p>
                    <a href="#" class="btn btn-primary">Buka</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Status</h5>
                    <p class="card-text">Cek status terbaru.</p>
                    <a href="#" class="btn btn-primary">Buka</a>
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection

</body>
</html>
