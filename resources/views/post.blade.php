@extends('layouts.default')

@section('title')

{{$post->title}}

@stop



@section('meta-description')

<p> {{$post->body}} por Syperhugeen </p>

@stop

@section('contenido')

<H1>{{$post->title}}</H1>
<p> {{$post->body}} </p>



@stop