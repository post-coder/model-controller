@extends('layouts/app')

@section('content')

<div class="container py-5">
    <h1>Tutti i film del nostro database</h1>

    <ul>

        @foreach($movies as $movie) 
            <li>
                {{$movie->title}}
                <p>
                    {{$movie->description}}
                </p>
            </li>
        @endforeach

    </ul>

</div>


@endsection