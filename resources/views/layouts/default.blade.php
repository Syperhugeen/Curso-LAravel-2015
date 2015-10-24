<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  <meta name="description" content="@yield('meta-description')">
  <link rel="stylesheet"  href=" {{url()}} {{ elixir('css/app.css') }}">
</head>
<body>


<div class ="container">

	@if($currentUser) 

	Hola {{ $currentUser->name}}

	<a href="{{ route('auth_exit')  }}"> Salir</a>
  <a href="{{ route('home')  }}">            Home</a>

	@else 
	  <a href="{{ route('auth_show')  }}">Iniciar Sesion</a>

	@endif

	@yield('contenido')

</div>
 
</body>
</html>