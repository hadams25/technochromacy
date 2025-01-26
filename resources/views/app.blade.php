<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>:P</title>

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/css/app.css"])
    </head>
    <body class="bg-neutral-800 text-green-400 flex flex-col items-center justify-center">
        <h1 class="text-2xl">:P</h1>
    </body>
</html>
