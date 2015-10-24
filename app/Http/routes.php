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


/**
 * group sirve para agrupar Rutas y poder utilizar los middlewere con todas ellas
 * por ejemplo en este caso agrupamos las Rutas dependiendo si esta logeado o no.
 */
Route::group( ['middleware'  => 'auth'] , 
function()
		{
		


		//Ruta para mostrar formulario de crear post	
		Route::get( 'post/create' , 	[
									 'uses' => 'PostsController@create' ,
									 'as'   => 'posts_create_path'
									]
		);	

		//Ruta para enviar formulario posts	
		Route::post( 'post/create' , 	[
									 'uses' => 'PostsController@store' ,
									 'as'   => 'posts_store_path'
									]
		);	



		

		//Ruta de posts editar
		Route::get( 'post/{id}/editar' , 	[
									 'uses' => 'PostsController@edit',
									 'as'   => 'post_edite'									]
		)->where('id' , '[0-9]+'); //ingreso reglas para los parametros

		//Ruta de posts editar Patch
		Route::patch( 'post/{id}/editar' , 	[
									 'uses' => 'PostsController@update',
									 'as'   => 'post_patch'									]
		)->where('id' , '[0-9]+'); //ingreso reglas para los parametros

		//Ruta de posts eliminar
		Route::delete( 'post/{id}/editar' , 	[
									 'uses' => 'PostsController@destroy',
									 'as'   => 'post_delete'									]
		)->where('id' , '[0-9]+'); //ingreso reglas para los parametros

		}

);



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
		)->where('id' , '[0-9]+'); //ingreso reglas para los parametros


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