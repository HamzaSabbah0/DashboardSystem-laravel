<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('website/assets/images/logo.svg') }}" type="image/x-icon">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('website/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/libs/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/libs/owl-carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/sport.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/tourism.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/trade.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/real-estate.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/programming.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/workteam.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/activity.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/privacy.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/main.css') }}">
    @stack('styles')
</head>

<body>

    <div class="main-container">
        @include('website._includes._header')

        <div class="content">
            @yield('content')
        </div>

        @include('website._includes._whatsapp')

        @include('website._includes._footer')
    </div>

    <script src="{{ asset('website/assets/js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('website/assets/js/all.min.js') }}"></script>
    <script src="{{ asset('website/assets/js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('website/assets/libs/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('website/assets/js/main.js') }}"></script>
    @stack('scripts')

</body>

</html>
