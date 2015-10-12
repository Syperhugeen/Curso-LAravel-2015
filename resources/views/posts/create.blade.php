@extends('layouts.default')


@section('contenido')

  <h1>Crear Post</h1>
  @include('partials.errors')

  <form action=" {{ route('posts_store_path') }} " method="post">
    
      {{ csrf_field() }}
      
      <label for="title">Título</label>
      <input class="form-control" type="text" name="title" value="{{ old('title')}}">
    

      <label for="body">Contenido</label>
      <textarea class="form-control" name="body" id="body" >{{ old('body')}}</textarea>

   

      <input class="btn btn-success" type="submit" value="crear">




  </form>





@stop
