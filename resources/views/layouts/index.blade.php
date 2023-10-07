@extends('layouts.master')
@section('content')
<h1>Halaman Index Post</h1>
<div class="main-content  mt-4">
    <div class="card">
        <div class="card-header">
            Semua Post
            <a class="btn btn-success"  href="{{route('posts.create')}}">Create</a>
            <a class="btn btn-warning"  href="">Thrashed</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col" style="width: 10%">Image</th>
                        <th scope="col" style="width: 10%">Title</th>
                        <th scope="col" style="width: 30%">Description</th>
                        <th scope="col" style="width: 10%">Category</th>
                        <th scope="col" style="width: 20%">Publish Date</th>
                        <th scope="col" style="width: 30%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $posts as $post )
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>
                            <img src="{{ asset($post->image) }}" alt="gambar barang" width="90">
                            {{-- <img src="{{ asset('storage/'.$post->image) }}" alt="gambar barang" width="90"> --}}
                        </td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>{{ $post->category_id }}</td>
                        <td>{{ date('d-m-Y', strtotime($post->created_at)) }}</td>
                        <td>
                            <a class="btn-sm btn-primary" a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                            <a class="btn-sm btn-danger" a href="">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
