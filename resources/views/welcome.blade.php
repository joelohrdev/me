<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="flex items-center justify-center min-h-screen">
        <x-logo class="w-24 h-24 text-gray-900" />
    </body>
</html>
