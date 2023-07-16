@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-5">
    <div class="row justift-content-center">
        <div>
            <a class="btn btn-success mb-3 me-3" href="{{route("admin.posts.edit", $post->id)}}">Modifica post</a>
        </div>
        <div>Post n° {{$post->id}}</div>
        <h1>{{$post->title}}</h1>
        <p class="card-text">{{ $post->content }}</p>
        <img class="card-img-top" src="{{ $post->image }}" alt="{{ $post->title }}">
    </div>
</div>

@endsection