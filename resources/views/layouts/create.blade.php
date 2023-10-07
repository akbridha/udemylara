@extends('layouts.master')
@section('content')
<h1>Halaman Create Post</h1>

<div class="main-content  mt-4">



        {{-- error handle --}}

        @if ($errors->any())
            @foreach ($errors->all() as $error )
                <div class="alert alert-danger">{{$error }}</div>
            @endforeach
        @endif
    <div class="card">
        <div class="card-header">
            <div class="row">

                <div class="col-md-6 ">
                    <h4>Create Post</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a class="btn btn-success mx-1" a href="/posts">Back</a>
                </div>
            </div>
        </div>

        {{ $categories }}
        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="" class="form-label">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Category</label>
                    <select id="" class="form-control" name="category_id">
                        <option value="">pilih</option>
                        @foreach ($categories as $kategori )
                        <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>

                        @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Description</label>
                    <textarea name="description" id="" cols="20" rows="10 " class="form-control" name="description"></textarea>
                </div>


                <div class="form-group mt-t">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>
    @endsection
