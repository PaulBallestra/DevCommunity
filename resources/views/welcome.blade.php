<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dev Community</title>

    <!-- TAILWIND LINK -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @livewireStyles
</head>
<body class="antialiased">

<h1 class="text-center text-bold"> TIMELINE </h1>

@livewire('create-post')

<!-- POST -->
@livewire('posts')

<script src="{{ asset('js/app.js') }}" defer></script>

@livewireScripts
</body>
</html>
