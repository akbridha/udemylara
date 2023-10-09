@extends('layouts.master')
@section('content')
<h1>Detail Post</h1>
<div class="main-content  mt-4">
    <div class="card">
        {{-- <div class="card-header">
            Semua Post
            <a class="btn btn-success"  href="{{route('posts.create')}}">Create</a>
            <a class="btn btn-warning"  href="">Thrashed</a>
        </div> --}}
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td colspan="6">
                            <img src="{{ asset($post->image) }}" alt="gambar barang" width="1020" >
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">ID</th>
                        {{-- <th scope="col" style="width: 10%">Image</th> --}}
                        <th scope="col" style="width: 15%">Title</th>
                        <th scope="col" style="width: 30%">Description</th>
                        <th scope="col" style="width: 5%">Category</th>
                        <th scope="col" style="width: 20%">Publish Date</th>
                        <th scope="col" style="width: 30%">Action</th>
                    </tr>
                </thead>



                <tbody>

                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>{{ $post->category_id }}</td>
                        <td>{{ date('d-m-Y', strtotime($post->created_at)) }}</td>
                        <td>
                            <a class="btn-sm btn-primary" a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                            <a class="btn-sm btn-danger" a href="">Delete</a>
                        </td>
                    </tr>



                </tbody>
            </table>
        </div>
    </div>
    @endsection
