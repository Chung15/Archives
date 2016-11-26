<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['middleware' => ['web']], function () {
 
    Route::get('/', 'UserController@index');
	
   /* Route::post('/', 'UserController@store');*/

	//Auth::routes();
	//Route::get('/home', 'HomeController@index');
	Route::get('/login', ['as' => 'login', 'uses' =>'AuthController@loginView']);// appelle le formulaire pour se connecter
	Route::post('/processLogin', ['as' => 'processLogin', 'uses' =>'AuthController@processLogin']);// execute la connection
	Route::post('/logout', ['as' => 'logout', 'uses' =>'AuthController@logout']);
	Route::get('/profile', ['as' => 'profile', 'uses' =>'UserController@showProfile']);

	Route::get('/register', ['as' => 'register', 'uses' =>'AuthController@registerView']);// appelle le formulaire pour se connecter
	Route::post('/store', ['as' => 'store', 'uses' =>'UserController@store']);// execute la 


    /*Route::get('/', function () {
    	return view('');
	
	});*/
	/*Route::post('/register', [
		'uses' => 'UserController@',
		'as' =>'register']

	);*/
});



/*Route::get('/home', 'HomeController@index');*/

