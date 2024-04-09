@extends('layouts/app')

@section('content')

<div class="container py-5">

    <h1>Il mio film preferito:</h1>

    @foreach($movies as $movie)
        {{$movie->title}}<br>
    @endforeach
</div>


@endsection