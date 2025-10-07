<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="flex items-center justify-center min-h-screen">
    <div class="w-24 h-24">
        @include('components.logo')
    </div>
    </body>
</html>
