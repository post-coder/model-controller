@extends('layouts/main')

@section('content')
  <h2>
    Studenti
  </h2>

  <ul>
    @foreach ($students as $student)
      <li>
        {{$student->name}} {{$student->surname}} - <a href="mailto:{{$student->email}}">{{$student->email}}</a>
      </li>  
    @endforeach
    
    <a href="{{route('student.create')}}">Aggiungi uno studente</a>
  </ul>
@endsection