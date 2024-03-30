<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DRumah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/owl.theme.default.min.css') }}">

    <!-- custom style -->
    <link rel="stylesheet" href="{{ asset('styles/home.css') }}">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- slick js -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <!-- colorbox css -->
    <link rel="stylesheet" href="{{ asset('plugins/colorbox/colorbox.css') }}">

    <!-- aos -->
    <link rel="stylesheet" href="{{ asset('aos/aos.css') }}"> 

  </head>
  <body>
    @include('partials.top-ads')
    @include('partials.header') <!-- including the file to layout -->
    @include('partials.hero-section') <!-- include the file to layout -->
    @include('partials.counter')
    @include('partials.greetings') <!-- include the file to layout -->
    @include('partials.layanan-jasa') <!-- include the file to layout -->
    @include('partials.pricelist') <!-- include the file to layout -->
    @include('partials.calculator-jasa-desain') <!-- include the file to layout -->
    @include('partials.proses-kerja') <!-- include the file to layout -->
    @include('partials.apa-yang-didapatkan') <!-- include the file to layout -->
    @include('partials.kerugian') <!-- include the file to layout -->
    @include('partials.mengapa-harus-kami')
    @include('partials.pricelist-jasa-bangun')
    @include('partials.partner')
    @include('partials.calculator-jasa-bangun')
    @include('partials.tentang-kami')
    @include('partials.portofolio') <!-- include the file to layout -->
    @include('partials.unggul-kami')
    @include('partials.testimoni')
    @include('partials.faq') 
    @include('partials.blog')
    @include('partials.cta')
    @yield('content')<!-- if the other file want to use this layouts, so it must call @section('content') -->
    @include('partials.footer') 









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- owl carousel -->
    <script src="{{ asset('owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('scripts/carousel.js') }}"></script>

    <!-- slick js -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- colorbox lightbox -->
    <script src="{{ asset('plugins/colorbox/jquery.colorbox-min.js') }}"></script>

    <!-- calculator js -->
    <script src="{{ asset('scripts/calculator.js') }}"></script>

    <!-- aos -->
    <script src="{{ asset('aos/aos.js') }}"></script>
    <script src="{{ asset('scripts/app.js') }}"></script>
    <!-- purecounter -->
    <script src="{{ asset('counter/purecounter_vanilla.js') }}"></script>
    <script>new PureCounter();</script>
  </body>
</html> 