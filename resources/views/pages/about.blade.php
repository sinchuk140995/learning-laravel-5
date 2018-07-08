@extends('app')

@section('content')

  <h1>About</h1>

  @if (count($people))
  <h2>People I like:</h2>
  <ul>
    @foreach ($people as $person)
      <li>{{ $person }}</li>
    @endforeach
  </ul>
  @endif

  <p>
      Lorem ipsum
  </p>

@stop
