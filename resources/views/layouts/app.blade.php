<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>HOLOGY</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <!-- Favicons -->
    <link href="{{ asset('homepage/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('homepage/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('homepage/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('homepage/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('homepage/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('homepage/css/timeline.css') }}">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('homepage/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
        Theme Name: Regna
        Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
        Author: BootstrapMade.com
        License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>
<body>
    <!-- Some random script, for the particles and font -->
    <script src="https://use.typekit.net/bkt6ydm.js"></script>
    <script>try { Typekit.load({ async: true }); } catch (e) { }</script>
    <div id="particles-js"></div>
    <script src="{{ asset('homepage/particle/particles.js') }}"></script>
    <script src="{{ asset('homepage/particle/app.js') }}"></script>

    <!-- HEADER -->
    @include('navbar.navbar')

    <!-- BODY -->
    @yield('content')

    <!-- FOOTER -->
    @include('footer.footer')


    <!-- Scripts -->
  <!-- JavaScript Libraries -->
  <script src="{{ asset('homepage/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('homepage/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('homepage/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('homepage/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('homepage/lib/wow/wow.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <script src="{{ asset('homepage/lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('homepage/lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('homepage/lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('homepage/lib/superfish/superfish.min.js') }}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('homepage/contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('homepage/js/main.js') }}"></script>
</body>
</html>
