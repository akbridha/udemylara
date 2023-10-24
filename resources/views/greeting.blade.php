@extends('layouts.master')

@section('content')


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Greeting</title>
</head>
<body>


    <div class="row mt-3">
        <a href="{{ route('greeting', 'en') }}" class="btn btn-primary">English</a>
        <a href="{{ route('greeting', 'hi') }}" class="btn btn-dark">Hindi</a>
    </div>

    <div class="display-3">{{__('frontend.Hello i will help You')}}</div>
    <p>Lokalisasi In laravel Memungkinkan anda untuk definikan terjemahan untuk berbagai bahasa</p>
    <ul class="row">
        <li class="list-group-item">{{__('frontend.sosial')}}</li>
    </ul>
    <ul class="row">
        <li class="list-group-item">{{__('frontend.iklim')}}</li>
    </ul>
    <ul class="row">
        <li class="list-group-item">{{__('frontend.mpokok')}}</li>
    </ul>
   <h1>Gutten Morgen</h1>
   <h1></h1>

</body>





@endsection
