@extends('layout.main')

@section('mainContent')
  <h1>{{$data["titolo"]}}</h1>
  <img src="{{$data["src-h"]}}" alt="image">
  <img src="{{$data["src-p"]}}" alt="image">
  <p>
    {{!!$data["descrizione"]!!}}
  </p>
@endsection
