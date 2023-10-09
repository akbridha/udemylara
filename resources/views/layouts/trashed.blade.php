@extends('layouts.master')
@section('content')
<h1>Halaman Thrased Post</h1>
<div class="main-content  mt-4">
    <div class="card">
        <div class="card-header">
            <div class="row">

                <div class="col-md-6 ">
                    <h4>Thrashed Post</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a class="btn btn-success mx-1" a href="/posts">Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="width: 10%">Image</th>
                        <th scope="col" style="width: 20%">Title</th>
                        <th scope="col" style="width: 30%">Description</th>
                        <th scope="col" style="width: 10%">Category</th>
                        <th scope="col" style="width: 10%">Publish Date</th>
                        <th scope="col" style="width: 20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ( $posts as $post )
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>
                                <img src="{{ asset($post->image) }}" alt="gambar barang" width="90">

                            </td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->category->name }}</td>
                            <td>{{ date('d-m-Y', strtotime($post->created_at)) }}</td>
                            <td>
                                <div class="d-flex">

                                    <a class="btn-sm btn-success" a href="{{ route('posts.restore', $post->id) }}">Restore</a>

                                    <form action="{{ route('posts.force_delete', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-sm btn-danger btn">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @endsection
