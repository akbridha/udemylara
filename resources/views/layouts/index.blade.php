@extends('layouts.master')
@section('content')
<h1>Halaman Index Post</h1>
<div class="main-content  mt-4">
    <div class="card">
        <div class="card-header">
            Semua Post
            {{-- @can('create_post') --}}
            @can('create',\App\Models\Post::class)
                <a class="btn btn-success"  href="{{route('posts.create')}}">Create</a>
                <a class="btn btn-warning"  href="{{ route('posts.trashed') }}">Thrashed</a>
            @endcan
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

                        </td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{ date('d-m-Y', strtotime($post->created_at)) }}</td>
                        <td>
                            <a class="btn-sm btn-success" a href="{{ route('posts.show', $post->id) }}">show</a>
                            @can('create',\App\Models\Post::class)
                                <a class="btn-sm btn-primary" a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-sm btn-danger btn">Delete</button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $posts->links() }}
        </div>
    </div>
    @endsection
