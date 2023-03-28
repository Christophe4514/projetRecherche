<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('front-end/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('front-end/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('front-end/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('front-end/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front-end/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('front-end/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front-end/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front-end/css/style.css') }}" rel="stylesheet">
</head>

<body>

    @yield('content')

 <script src="{{ asset('front-end/vendor/aos/aos.js') }}"></script>
 <script src="{{ asset('front-end/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('front-end/vendor/glightbox/js/glightbox.min.js') }}"></script>
 <script src="{{ asset('front-end/vendor/swiper/swiper-bundle.min.js') }}"></script>
 <script src="{{ asset('front-end/vendor/php-email-form/validate.js') }}"></script>
 <script src="{{ asset('front-end/js/main.js') }}"></script>

</body>

</html>