<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="description" content="Лазертаг Дніпро ✅ ВСЛК &quot;Войнушка&quot; - Клуб Лазерних боїв Лазертаг бої на відкритій місцевості, в приміщенні. ☎ (096) 486 2244 (099) 456 9009.">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ui-elements.css') }}" rel="stylesheet">
    <link href="{{ asset('css/we-offer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    <link href="{{ asset('css/laser-tag.css') }}" rel="stylesheet">

    <!-- Standard favicon -->
    <link rel="icon" href="{{ asset('favicons/favicon.ico') }}" type="image/x-icon">

    <!-- Favicon PNG files -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/32x32.png') }}">
    <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('favicons/48x48.png') }}">
    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('favicons/64x64.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicons/192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('favicons/512x512.png') }}">

    <!-- SVG Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicons/favicon.svg') }}">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/180x180.png') }}">

    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
</head>
<body>
<header>
    @include('partials.navbar')
</header>
<main role="main">
    @yield('content')
    @include('partials.modal')
</main>
<footer>
    @include('partials.footer')
</footer>
<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/carousel.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
