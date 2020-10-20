doc DOCTYPE
sul titolo @yeald('title')

<body>
  includ partiel.header
  <main>
    @yeald('mainContent')
  </main>
  @include('partial.footer')
  <script js></script>
  @yield('stylejs')
</body>
