<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Laravel</title>
    </head>
    <body>
       <h1 class="text-3xl font-bold underline text-red-500">
    Hello world!
       </h1>
        <p class="text-blue-600">The quick brown fox...</p>
    </body>
</html>
