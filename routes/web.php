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
  Route::get('/login', ['as' => 'login', 'uses' =>'AuthController@loginView']);// appelle le formulaire pour se connecter
  Route::post('/processLogin', ['as' => 'processLogin', 'uses' =>'AuthController@processLogin']);// execute la connection

  Route::get('/register', ['as' => 'register', 'uses' =>'AuthController@registerView']);// appelle le formulaire pour se connecter
  Route::post('/store', ['as' => 'store', 'uses' =>'UserController@store']);// execute la 

 route::group(['middleware' => 'auth'], function () {
   /*---------forms routes---------*/
   Route::get('/other', ['as'=> 'other', 'uses' => 'OtherController@create']);
   Route::get('/diploma',['as' =>'diploma','uses' => 'DiplomaController@create']);
   Route::get('/academicTitle',['as' =>'academicTitle','uses' => 'AcademicTitleController@create']);
   Route::get('/academicDegree',['as' =>'academicDegree','uses' => 'AcademicDegreeController@create']);
   Route::get('/publications', ['as' => 'publications', 'uses' => 'PublicationsController@create']);
   Route::get('/topics', ['as' => 'topics', 'uses' => 'TopicsController@create']);
   Route::get('/training', ['as' => 'training', 'uses' => 'trainingController@create']);
   Route::get('/child', ['as' => 'child','uses' => 'ChildController@create']);
/*-------------------------------------*/
    Route::post('/saveChildren', ['as' => 'saveChildren','uses' => 'ChildController@store']);
    Route::get('/children', ['as' => 'children','uses' => 'ChildController@index']);

    Route::post('/saveOther', ['as' => 'saveOther','uses' => 'OtherController@store']);
    Route::get('/processOther', ['as' => 'processOther','uses' => 'OtherController@index']);

    Route::post('/savePub', ['as' => 'savePub','uses' => 'PublicationsController@store']);
    Route::get('/processPub', ['as' => 'processPub','uses' => 'PublicationsController@index']);

    Route::post('/saveTraining', ['as' => 'saveTraining','uses' => 'TrainingController@store']);
    Route::get('/processTraining', ['as' => 'processTraining','uses' => 'TrainingController@index']);

    Route::post('/saveTopic', ['as' => 'saveTopic','uses' => 'TopicsController@store']);
    Route::get('/processTopic', ['as' => 'processTopic','uses' => 'TopicsController@index']);

    Route::post('/saveDiploma', ['as' => 'saveDiploma','uses' => 'DiplomaController@store']);
    Route::get('/processDiploma', ['as' => 'processDiploma','uses' => 'DiplomaController@index']);

    Route::post('/saveTitle', ['as' => 'saveTitle','uses' => 'AcademicTitleController@store']);
    Route::get('/processTitle', ['as' => 'processTitle','uses' => 'AcademicTitleController@index']);

    Route::post('/saveDegree', ['as' => 'saveDegree','uses' => 'AcademicDegreeController@store']);
    Route::get('/processDegree', ['as' => 'processDegree','uses' => 'AcademicDegreeController@index']);


  Route::post('/logout', ['as' => 'logout', 'uses' =>'AuthController@logout']);
  Route::get('/{id}', ['as' => 'profile', 'uses' =>'UserController@showProfile']);


  });

   /* Route::post('/', 'UserController@store');*/

  //Auth::routes();
   Route::get('/{id}', ['as' => 'profile', 'uses' =>'UserController@show']);
  //Route::get('/home', 'HomeController@index');


	/*Route::post('/register', [
		'uses' => 'UserController@',
		'as' =>'register']

	);*/
});



/*Route::get('/home', 'HomeController@index');*/

