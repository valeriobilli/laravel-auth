@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <div class="row justift-content-between">
        @foreach ($posts as $post)
        <div class="col-4">
            <img class="card-img-top" src="{{ $post->image }}" alt="{{ $post->title }}">
            <div class="card-body">
                <h4 class="card-title">{{ $post->title }}</h4>
                <p class="card-text">{{ $post->content }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection