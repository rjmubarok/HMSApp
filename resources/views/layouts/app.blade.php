<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hostel Management System</title>


  <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend') }}/assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend') }}/assets/img/favicons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/img/favicons/favicon.ico">
  <link rel="manifest" href="{{ asset('frontend') }}/assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="{{ asset('frontend') }}/assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">
  <script src="vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>
  <link href="vendors/prism/prism.css" rel="stylesheet">
  <link href="vendors/hamburgers/hamburgers.min.css" rel="stylesheet">
  <link href="vendors/loaders.css/loaders.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="{{ asset('frontend') }}/vendors/owl-carousel/owl.theme.default.css">
  <link rel="stylesheet" href="./{{ asset('frontend') }}/assets/css/jquery-ui.min.css">
  <link href="{{ asset('frontend') }}/assets/css/theme.min.css" rel="stylesheet" />
  <link href="{{ asset('frontend') }}/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/assets/css/user.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&amp;family=Open+Sans:wght@300;400;600;700;800&amp;display=swap"
    rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
</body>
</html>
