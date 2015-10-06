<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  <meta name="description" content="@yield('meta-description')">
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
 @yield('contenido')
</body>
</html>