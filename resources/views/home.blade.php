@extends('layouts.default')





@section('title')


@stop



@section('meta-description')


@stop


@section('contenido')

        <h1>Estos son los posts </h1>

        <a class="btn btn-primary" href=" {{ route('posts_create_path') }} ">Crear Post</a>

        <ul>
        @foreach($posts as $post)  

        <li> 

          <a href="{{ route('post_show' , $post->id ) }}">
             {{ $post->title}}
          </a>

          {{ $post->title}} - {{ $post->author->title}}

        </li>

        @endforeach
        </ul>

@stop
