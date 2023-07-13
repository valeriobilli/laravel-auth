@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-5">
    <div class="row justift-content-center">
        <h1>Crea un nuovo post</h1>

        <form action="{{ route("admin.posts.store") }}" method="POST" class="needs-validation">
            @csrf

            <label for="Title" class="mt-3">Titolo</label>
            <input type="text" name="title" id="title" class="form-control">

            <label for="content" class="mt-3">Contenuto</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>

            <label for="image" class="mt-3">Indirizzo immagine</label>
            <input type="text" name="image" id="image" class="form-control">

            <input type="submit" class="form-control btn btn-primary mt-5" value="Crea nuovo post">

        </form>

    </div>
     

@endsection