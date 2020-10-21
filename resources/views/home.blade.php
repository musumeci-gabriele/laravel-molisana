@extends('layout.main')

<!-- PHP -->
@php
// collegamento al db-paste
$data = config('paste')
@endphp
<!-- End PHP -->


<!-- Main content -->
@section('mainContent')
  <main>
    <img src="{{asset('images/fondo-pag-speciali.jpg')}}" alt="background">
    <h3>LE LUNGHE</h3>
    <ul>
      @foreach ($data as $dato)
        @if($dato["tipo"] === "lunga")
          <li><img src="{{$dato["src"]}}" alt="immagine pasta"></li>
          <a href="#"><h4>{{$dato["titolo"]}}</h4></a>
        @endif
      @endforeach
    </ul>

    <h3>LE CORTE</h3>
    <ul>
      @foreach ($data as $dato)
        @if($dato["tipo"] === "corta")
          <li><img src="{{$dato["src"]}}" alt="immagine pasta"></li>
          <h4>{{$dato["titolo"]}}</h4>
        @endif
      @endforeach
    </ul>

    <h3>LE CORTISSIME</h3>
    <ul>
      @foreach ($data as $dato)
        @if($dato["tipo"] === "cortissima")
        <li><img src="{{$dato["src"]}}" alt="immagine pasta"></li>
        <h4>{{$dato["titolo"]}}</h4>
        @endif
      @endforeach
    </ul>
  </main>
@endsection
<!-- // Main content -->
