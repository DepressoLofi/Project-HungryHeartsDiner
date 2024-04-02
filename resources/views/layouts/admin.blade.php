<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/assets/bootstrap/css/bootstrap.css', 'resources/assets/bootstrap/js/bootstrap.js'])
    @yield('css')

</head>




<body>
    <div class="bg-warning text-dark">
        <h1>This is admin panel</h1>
    </div>
    @yield('content')

</body>
@yield('js')

</html>
