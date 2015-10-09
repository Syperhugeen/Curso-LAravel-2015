<?php 
namespace PlatziPHP\Http\Controllers;
use PlatziPHP\Entidades\Post;



class HomeController extends Controller
{
  public function index()
  {
    
    /**
     *  con el metodo all() me traigo todo lo que tengo en la base de dats
     *  y en la vista eligo que atributo mostrar .
     *  Con el metodo find() solo traigo unos y en ese caso lo tengo que pasar  
     *  como un array de datos.
     */
    $posts = Post::with(['author'])->get();
    
    
    

   

    return view('home' , ['posts' => $posts] );
  }
}
