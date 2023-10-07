@extends('layouts.master')
@section('content')
<h1>Halaman Create Post</h1>
<div class="main-content  mt-4">

    {{ $post }}

    @if ($errors->any())
    @foreach ($errors->all() as $error )
        <div class="alert alert-danger">{{$error }}</div>
    @endforeach
@endif
    <div class="card">
        <div class="card-header">
            <div class="row">

                <div class="col-md-6 ">
                    <h4>Edit Post</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a class="btn btn-success mx-1" a href="/posts">Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('posts.update', $post->id) }}"  method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <div>
                        <img src="{{ asset($post->image) }}" style="width: 100px" alt="">
                    </div>
                    <label for="" class="form-label">Image</label>
                    <input name="image" type="file" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Title</label>
                    <input name="title" type="text" class="form-control" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Category</label>
                    <select name="category_id" id="" class="form-control">
                        <option value="">Select</option>
                        @foreach ($categories as $category)
                        <option  {{ $category->id == $post->category_id ? 'selected' : ''}} value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Description</label>
                    <textarea name="description" id="" cols="20" rows="10 " class="form-control">{{ $post->description }}</textarea>
                </div>


                <div class="form-group mt-t">
                    <button class="btn btn-primary">Submit</button>
                </div>



            </form>

        </div>
    </div>
    @endsection
