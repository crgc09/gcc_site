<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>{{ config('app.name') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Icon -->
    <link rel="icon" href="http://localhost/gcc_site/public/img/landings/parachute.ico" type="image/gif">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,100;0,300;0,400;0,600;0,700;1,100;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/core.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pages.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hexagrid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dialogs.css') }}" rel="stylesheet">
  </head>
  <body style="background-image: url(public/img/landings/slash.png), url(public/img/landings/pa2.jpg);">
    <div id="app">
    </div>
  </body>
  <script>
    var lct = {
      'ct' : '{{csrf_token()}}',
      'tok' : '{{Auth::user()->id}}'
    };
  </script>
</html>
