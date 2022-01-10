<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>PawoMarket</title>
    <!-- Scripts -->
    <script src="{{ asset('assets/js/theme/jquery-3.6.0.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/theme/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/theme/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/theme/menu.js') }}" defer></script>
    <script src="{{ asset('assets/js/theme/count.js') }}" defer></script>
    <script src="{{ asset('assets/js/theme/wow.min.js') }}" defer></script>
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

@include('pages.partials.banner',[
    'currentPage' => 'My account'

    ])


<section id="my-account_area" class="ptb-100">
    <div class="container">
        <div class="row">
            @include('account.partials.nav')
            <div class="col-sm-12 col-md-12 col-lg-9">
                @yield('pages')
            </div>
        </div>
    </div>
</section>
</body>
</html>
