<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  <meta name="description" content="@yield('meta-description')">
  <link rel="stylesheet"  href=" {{url()}} {{ elixir('css/app.css') }}">
</head>
<body>
 @yield('contenido')
</body>
</html>