@include('frontend.layouts.head')

<body>
  @include('frontend.layouts.nav')

  <!-- ===============================================-->
  <main class="main" id="top">
    @yield('content')
  </main>

 @include('frontend.layouts.footer')

@include('frontend.layouts.script')
