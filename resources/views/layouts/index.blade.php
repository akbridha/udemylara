@extends('layouts.master')


@section('content')


<h1>Halaman Index Post</h1>

<div class="main-content  mt-4">
    <div class="card">
        <div class="card-header">
            Semua Post
            <div class="btn btn-success" a href="">Create</div>
            <div class="btn btn-warning" a href="">Thrashed</div>

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
                        {{-- @foreach ( as ) --}}
                        <th scope="row">#</th>
                        <td>
                            <img src="" alt="gambar barang" width="90">
                        </td>
                        <td>Title</td>
                        <td>Description</td>
                        <td>Category</td>
                        <td>Publish Date</td>
                        <td>

                            <div class="btn-sm btn-primary" a href="">Edit</div>
                            <div class="btn-sm btn-danger" a href="">Delete</div>
                        </td>
                        {{-- @endforeach --}}
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    @endsection
