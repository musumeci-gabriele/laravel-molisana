<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title', "La Molisana")</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>

  <body>
    @include('partials.header')

    <main>
      @yield('mainContent')
    </main>

    @include('partials.footer')

    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
  </body>
</html>
