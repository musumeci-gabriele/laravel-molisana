{{-- collegamento al main --}}
@extends('layout.main')

@php
  // collegamento al db-paste
  $data = config('db_paste');

  // array tipologie di pasta
  $tipi_pasta = [
    "Le lunghe" => [],
    "Le corte" => [],
    "Le cortissime" => []
  ];

  // ciclo suddivisione tipologia pasta
  foreach ($data as $key => $prodotto) {
    $prodotto["id"] = $key;

    if ($prodotto["tipo"] == "lunga") {
      $tipi_pasta["Le lunghe"][] = $prodotto;

    } elseif ($prodotto["tipo"] == "corta") {
        $tipi_pasta["Le corte"][] = $prodotto;

    } elseif ($prodotto["tipo"] == "cortissima") {
        $tipi_pasta["Le cortissime"][] = $prodotto;
    }

  }
@endphp

{{-- modifica titolo --}}
@section('title')
  Home
@endsection

@section('main-content')

  <div class="pasta-section">
    <div class="container">

      @foreach ($tipi_pasta as $key => $tipo_pasta)
        @if (!empty($tipo_pasta))
          <h2>{{ $key }}</h2>

          <ul class="pasta-menu">
            @foreach ($tipo_pasta as $prodotto)
              <li class="box-prodotto">
                <img class="immagine-prodotto" src="{{ $prodotto["src"] }}" alt="Immagine pasta">

                <div class="layover">
                  <h3><a href="prodotti/show/{{ $prodotto["id"] }}">{{ $prodotto["titolo"] }}</a></h3>
                  <a href="prodotti/show/{{ $prodotto["id"] }}"><img src="{{ asset("images/icon.svg")}}" alt="Icona posate"></a>
                </div>

              </li>
            @endforeach
          </ul>

        @endif
      @endforeach

    </div>
  </div>

@endsection
