@extends('layouts.default')





@section('title')


@stop



@section('meta-description')


@stop


@section('contenido')

        <h1>Estos son los posts </h1>
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
