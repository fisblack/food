<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Global CSS -->
    @yield('global-head')
  </head>

  <body id="body">
    <!-- Global Body -->
    @yield('global-body')
    
    <!-- Global JavaScript -->
    @yield('global-script')
  </body>
</html>
