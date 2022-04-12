<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
    @livewireStyles
</head>
<body>
    @include('layouts.includes.header')

    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full md:px-24 lg:px-8 lg:py-8">
    @yield('body')
    <div>
    
    @include('layouts.includes.footer')

    @livewireScripts
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>