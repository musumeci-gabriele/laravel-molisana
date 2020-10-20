<!-- PHP -->
@php
// collegamento al db-paste
$data = config('paste');
@endphp
<!-- End PHP -->

@section('title')
  La Molisana
@endsection

  <body>
    <!-- Header -->
    @section()
    @endsection
    <!-- / header -->

    <!-- Main content -->
    <main>
      <h3>LE LUNGHE</h3>
      <ul>
        @foreach ($data as $dato)
          @if($dato["tipo"] === "lunga")
            <li><img src="{{$dato["src"]}}" alt="immagine pasta"></li>
            <h3>{{$dato["titolo"]}}</h3>
          @endif
        @endforeach
      </ul>

      <h3>LE CORTE</h3>
      <ul>
        @foreach ($data as $dato)
          @if($dato["tipo"] === "corta")
            <li><img src="{{$dato["src"]}}" alt="immagine pasta"></li>
            <h3>{{$dato["titolo"]}}</h3>
          @endif
        @endforeach
      </ul>

      <h3>LE CORTISSIME</h3>
      <ul>
        @foreach ($data as $dato)
          @if($dato["tipo"] === "cortissima")
          <li><img src="{{$dato["src"]}}" alt="immagine pasta"></li>
          <h3>{{$dato["titolo"]}}</h3>
          @endif
        @endforeach
      </ul>
    </main>
    <!-- // main content -->

    <!-- Footer -->
    @include('partials.footer')
    <!-- // Footer -->

  </body>
</html>
