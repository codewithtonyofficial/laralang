<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <h1 class="text-4xl font-bold">{{ __('welcome.welcome') }}</h1>
    <h2 class="text-2xl text-blue-400">{{ __('welcome.name-this-color') }}</h2>
<p>{{ __('auth.register.email') }}</p>
</body>

</html>

