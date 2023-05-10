{{-- mostra tutti i professori --}}
@extends ('layouts/main')

@section('content')
  Tutti i professori:
  <ul>
    @foreach ($teachers as $singleTeacher)
      <li>
        {{$singleTeacher->name}} {{$singleTeacher->surname}} - {{$singleTeacher->office_number}}
      </li>        
    @endforeach
  </ul>
@endsection