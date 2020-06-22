<!DOCTYPE HTML>
<html>
    <head>
        <title>@yield('title') | {{ env('APP_NAME') }}</title>
        @yield('head')
    </head>
    <body>
        
        @yield('content')
        
        @yield('scripts')
    </body>
</html>