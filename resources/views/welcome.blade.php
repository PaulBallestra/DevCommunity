<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- TAILWIND LINK -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @livewireStyles
    </head>
    <body class="antialiased">

        @livewire('post')

        <h1 class="text-3xl font-bold underline">
            Hello world!
        </h1>

        @livewireScripts
    </body>
</html>
