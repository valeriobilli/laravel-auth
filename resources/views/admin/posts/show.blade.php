@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-5">
    <div class="row justift-content-center">
        <h1>{{$post->id}}</h1>
        <div class="col-4">
            <img class="card-img-top" src="{{ $post->image }}" alt="{{ $post->title }}">
            <div class="card-body">
                <h4 class="card-title">{{ $post->title }}</h4>
                <p class="card-text">{{ $post->content }}</p>
            </div>
        </div>
    </div>
</div>

@endsection