<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        @livewireStyles
        <link rel="stylesheet" type="text/css" href="{{asset('app.css')}}"/ >
        @yield('css')
    </head>
    <body>
        @livewireScripts
        @yield('scripts')

        {{ $slot }}
    </body>
</html>
