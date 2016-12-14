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

/*---------------request form routes----------------------*/
    Route::post('/saveChildren', ['as' => 'saveChildren','uses' => 'ChildController@store']);
    Route::get('/archives/children', ['as' => 'children','uses' => 'ChildController@index']);
    Route::resource('/child', 'ChildController', ['only' => ['edit', 'update', 'destroy']]);

    
    Route::post('/saveOther', ['as' => 'saveOther','uses' => 'OtherController@store']);
   // Route::patch('/other/{id}', ['as' => 'updateOther','uses' => 'OtherController@update']);
    //Route::delete('/other/{id}', ['as' => 'deleteOther','uses' => 'OtherController@destroy']);
    //Route::get('other/{id}/edit', ['as' => 'editOther', 'uses' =>'OtherController@edit']);
    Route::resource('/other', 'OtherController', ['only' => ['edit', 'update', 'destroy']]);
    Route::get('/archives/other', [ 'uses' => 'OtherController@index']);

    Route::post('/savePub', ['as' => 'savePub','uses' => 'PublicationsController@store']);
    Route::get('/processPub', ['as' => 'processPub','uses' => 'PublicationsController@index']);

    Route::post('/saveTraining', ['as' => 'saveTraining','uses' => 'TrainingController@store']);
    Route::get('/processTraining', ['as' => 'processTraining','uses' => 'TrainingController@index']);

    Route::post('/saveTopic', ['as' => 'saveTopic','uses' => 'TopicsController@store']);
    Route::get('/archives/topics', ['as' => 'processTopic','uses' => 'TopicsController@index']);
    Route::resource('/topic', 'TopicsController', ['only' => ['edit', 'update', 'destroy']]);

    Route::post('/saveDiploma', ['as' => 'saveDiploma','uses' => 'DiplomaController@store']);
   // Route::get('/processDiploma', ['as' => 'processDiploma','uses' => 'DiplomaController@index']);
    Route::resource('/diploma', 'DiplomaController', ['only' => ['edit', 'update', 'destroy']]);
    Route::get('/archives/diploma', [ 'uses' => 'DiplomaController@index']);

    Route::post('/saveTitle', ['as' => 'saveTitle','uses' => 'AcademicTitleController@store']);
    Route::get('/archives/academicTitle', ['as' => 'processTitle','uses' => 'AcademicTitleController@index']);
    Route::resource('/title', 'AcademicTitleController', ['only' => ['edit', 'update', 'destroy']]);


    Route::post('/saveDegree', ['as' => 'saveDegree','uses' => 'AcademicDegreeController@store']);
    Route::get('/archives/academicDegree', ['as' => 'processDegree','uses' => 'AcademicDegreeController@index']);
    Route::resource('/degree', 'AcademicDegreeController', ['only' => ['edit', 'update', 'destroy']]);


  //archives links
// alias not working?
Route::get('/archives/other/{id}', ['as' => 'singleOther', 'uses' =>'OtherController@show']);
   Route::get('/archives/academicTitle/{id}', ['as' => 'singlTitle', 'uses' =>'AcademicTitleController@show']);
   Route::get('/archives/academicDegree/{id}', ['as' => 'singlTitle', 'uses' =>'AcademicDegreeController@show']);
    Route::get('/archives/children/{id}', ['uses' =>'ChildController@show']);
    Route::get('/archives/topics/{id}', ['uses' =>'TopicsController@show']);

  
 
  Route::get('/archives', ['as' => 'archives', 'uses' =>'UserController@showArchives']);
  Route::post('/logout', ['as' => 'logout', 'uses' =>'AuthController@logout']);
  Route::get('/{id}', ['as' => 'profile', 'uses' =>'UserController@showProfile']);

  //////////////////////////edit forms routes/////////////////////
   Route::get('/archives/diploma/{id}', ['as' => 'singleDiploma', 'uses' =>'DiplomaController@show']);
  


  });

   /* Route::post('/', 'UserController@store');*/

   //we don't have to be connected to see a  teacher's profile when click on his name
   Route::get('/{id}', ['as' => 'profile', 'uses' =>'UserController@show']);
   



  //Route::get('/home', 'HomeController@index');


	/*Route::post('/register', [
		'uses' => 'UserController@',
		'as' =>'register']

	);*/
});


