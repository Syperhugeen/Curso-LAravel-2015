@extends('layouts.default')


@section('contenido')

  <h1>Editar Posts</h1>
  @include('partials.errors')

  <form action=" {{ route('post_patch', $post->id) }} " method="post">
    
      {{ csrf_field() }}

      <input type="hidden" name="_method" value="patch">
      <label for="title">Título</label>
      <input class="form-control" type="text" name="title" value="{{  $post->title}}">
    

      <label for="body">Contenido</label>
      <textarea class="form-control" name="body" id="body" >{{ $post->body}}</textarea>

   

      <input class="btn btn-success" type="submit" value="crear">




  </form>





@stop