@extends('layouts.main')
@section('content')


<head>
    <title>Login Form</title>
</head>

<div class="row mt-5 justify-content-center">

    <div class="col-md-4">
    <h2>Login</h2>

    @if ($errors->any())
    {{-- apabila ada error  --}}
    @foreach ($errors->all() as $error )
        <div class="alert alert-danger">{{$error}}</div>

    @endforeach






    @endif
        <div class="card">
            <div class="card-body">

                <form action = "{{route('login.submit')}}" method="POST">
                    @csrf
                            {{-- apabila tidak pakai csrr maka akan "419 | page expired" --}}
                    <div class="mb-2">
                        <label for="">Username</label>
                        <input name="name" type="text" class="form-control" id="" placeholder="Username">
                    </div>
                    <div class="mb-2">
                        <label for="">Email address</label>
                        <input name="email" type="email" class="form-control" id=""  placeholder="Email">

                    </div>
                    <div class="mb-2">
                        <label for=""> User Password</label>
                        <input name="password" type="password" class="form-control" id="" placeholder="Password">

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
