<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
@livewireStyles
</head>
<body class="bg-gray-300 h-screen antialiased leading-none font-sans">
<div class="p-8 bg-gradient-to-r from-yellow-400 via-red-500 to-pink-500 "><p class="text-white text-center text-5xl font-bold">Stony Hill Library Service</p></div>
@yield('content')

@livewireScripts
</body>
</html>

