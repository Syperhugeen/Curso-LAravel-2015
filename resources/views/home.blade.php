@extends('layouts.default')





@section('title')
esta es el titple
@stop



@section('meta-description')
Esta pagina es de prueba y es el contenido de la meta etiqueta

@stop


@section('contenido')

        <h1>Estos son los posts </h1>
        <ul>
        @foreach($posts as $post)  

        <li> 

          {{ $post->name }} - {{ $post->author->name}}

        </li>

        @endforeach
        </ul>

@stop
