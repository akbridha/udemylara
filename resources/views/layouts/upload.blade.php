@extends('layouts.main')



@section('content')

<main role="main" class="container">




      <img src="{{ asset('/storage/yeyenkencenk.jpg') }}" alt="pas Foto">
    <div class="card">
        @if ($errors->any())
            @foreach ($errors->all() as $error )

            <div class="alert alert-danger">{{ $error }}</div>

            @endforeach
         @endif
        <div class="card-body">
            <form action="{{route('upload-file')}}" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    @csrf

                    <label for="">Upload</label>
                    <input type="file" name="image" class="form-control">

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Kirim</button>
                </div>
            </form>
        </div>
    </div>

    <div class="col-md-4 mt-5">

    </div>

</main>
@endsection
