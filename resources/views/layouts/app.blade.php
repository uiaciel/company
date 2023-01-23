<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss'])
    <link rel="stylesheet" href="/css/app-light.css">


</head>

<body>
    <div id="app">
        <main class="py-2">
            @yield('content')
        </main>
    </div>
</body>

</html>
