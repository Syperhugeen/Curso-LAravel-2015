<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::group( ['middleware'  => 'auth'] , 
function()
{
//Home Controller
Route::get('/' ,  [	 'uses' => 'HomeController@index' ,
					 'as'   => 'home'
				  ]


);

//Ruta de posts
Route::get( 'post/{id}' , 	[
							 'uses' => 'PostsController@show' ,
							 'as'   => 'post_show'
							]
);
}

);








//Inicion de sesion
Route::get('iniciar' , [
				  'uses' => 'AuthController@index' ,
				  'as'   => 'auth_show'
]);

//Envio de datos de inicio de sesion
Route::post('iniciar' , [
				  'uses' => 'AuthController@store' ,
				  'as'   => 'auth_store'
]);

//Salir de sesion, destruir la sesion
Route::get('salir' , [
				  'uses' => 'AuthController@destroy' ,
				  'as'   => 'auth_exit'
]);