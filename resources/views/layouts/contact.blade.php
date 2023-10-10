@extends('layouts.master')

@section('content')

    <h2>Contact nvoound</h2>

    <x-button>
        Submit
    </x-button>
    <x-forms.button/>
    <x-input-field/>

    <div class="row">

        @foreach ($posts as $post )
            <x-post.index>
                <x-slot name="title">
                    {{ $post->title }}
                </x-slot>
                <x-slot name="description">
                    {{ $post->description }}
                </x-slot>
            </x-post.index>
        @endforeach
    </div>
    {{-- <div class="jumbotron">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div> --}}
@endsection

