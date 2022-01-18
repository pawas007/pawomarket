<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{env('APP_NAME')}} | @yield('title')</title>
    <!-- Scripts -->
    @include('layouts.partials.favicon')
    <script src="{{ asset('assets/js/theme/jquery-3.6.0.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/theme/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/theme/jquery-ui.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/theme/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/theme/menu.js') }}" defer></script>
    <script src="{{ asset('assets/js/theme/count.js') }}" defer></script>
    <script src="{{ asset('assets/js/theme/range-slider.js') }}" defer></script>
    <script src="{{ asset('assets/js/theme/custom.js') }}" defer></script>
    <script src="{{ asset('assets/js/app.js') }}" defer></script>




    @stack('scripts')

<!-- Styles -->
    <link href="{{ asset('assets/css/theme/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme/fontawesome.all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme/color.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">



</head>
<body>

@include('layouts.partials.header')

@yield('pages')

@include('layouts.partials.footer')
</body>
</html>
