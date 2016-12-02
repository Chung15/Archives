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


Route::group(['middleware' => ['web']], function () {
 
    Route::get('/', 'UserController@index');

 route::group(['middleware' => 'auth'], function () {
   /*---------forms routes---------*/
   Route::get('/other', ['as'=> 'other', 'uses' => 'OtherController@create']);
   Route::get('/education',['as' =>'education','uses' => 'EducationController@create']);
   Route::get('/publications', ['as' => 'publications', 'uses' => 'PublicationsController@create']);
   Route::get('/topics', ['as' => 'topics', 'uses' => 'TopicsController@create']);
   Route::get('/training', ['as' => 'training', 'uses' => 'trainingController@create']);
   Route::get('/child', ['as' => 'child','uses' => 'ChildController@create']);
/*-------------------------------------*/
    Route::post('/children', ['as' => 'children','uses' => 'ChildController@store']);
    Route::get('/children', ['as' => 'children','uses' => 'ChildController@index']);

    Route::post('/processOther', ['as' => 'processOther','uses' => 'OtherController@store']);
    Route::get('/processOther', ['as' => 'processOther','uses' => 'OtherController@index']);

    Route::post('/processPub', ['as' => 'processPub','uses' => 'PublicationsController@store']);
    Route::get('/processPub', ['as' => 'processPub','uses' => 'PublicationsController@index']);

    Route::post('/processTraining', ['as' => 'processTraining','uses' => 'TrainingController@store']);
    Route::get('/processTraining', ['as' => 'processTraining','uses' => 'TrainingController@index']);

    Route::post('/processTopic', ['as' => 'processTopic','uses' => 'TopicsController@store']);
    Route::get('/processTopic', ['as' => 'processTopic','uses' => 'TopicsController@index']);


	});

   /* Route::post('/', 'UserController@store');*/

	//Auth::routes();
	//Route::get('/home', 'HomeController@index');
	Route::get('/login', ['as' => 'login', 'uses' =>'AuthController@loginView']);// appelle le formulaire pour se connecter
	Route::post('/processLogin', ['as' => 'processLogin', 'uses' =>'AuthController@processLogin']);// execute la connection
	Route::post('/logout', ['as' => 'logout', 'uses' =>'AuthController@logout']);
	Route::get('/profile', ['as' => 'profile', 'uses' =>'UserController@showProfile']);

	Route::get('/register', ['as' => 'register', 'uses' =>'AuthController@registerView']);// appelle le formulaire pour se connecter
	Route::post('/store', ['as' => 'store', 'uses' =>'UserController@store']);// execute la 


	/*Route::post('/register', [
		'uses' => 'UserController@',
		'as' =>'register']

	);*/
});



/*Route::get('/home', 'HomeController@index');*/

