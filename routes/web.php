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
  Route::get('/help', ['as' => 'help','uses' => 'UserController@showHelp']);
 /* Route::post('/password/email', ['as' => 'reset','uses' => 'Auth\ForgotPasswordController']);
  Route::get('/email', ['as' => 'email','uses' => 'AuthController@sendLink']);
  Route::post('/password/reset', ['as' => 'reset','uses' => 'Auth\ResetPasswordController']);
   Route::get('/reset', ['as' => 'reset','uses' => 'AuthController@resetPassword']);*/


 route::group(['middleware' => 'auth'], function () {
 Route::match(array('GET', 'POST'), '/profile/{user_id}/profile_picture', ['as' => 'upload', 'uses' =>'UserController@uploadImg']);
 //Route::post('/profile/{user_id}/profile_picture', ['as' => 'upload', 'uses' =>'UserController@uploadImg']);
 Route::post('/profile/{user_id}/publication_file', ['as' => 'uploadFile', 'uses' =>'PublicationController@upload']);
   /*---------forms routes---------*/
   Route::get('/other', ['as'=> 'other', 'uses' => 'OtherController@create']);
   Route::get('/diploma',['as' =>'diploma','uses' => 'DiplomaController@create']);
   Route::get('/academicTitle',['as' =>'academicTitle','uses' => 'AcademicTitleController@create']);
   Route::get('/academicDegree',['as' =>'academicDegree','uses' => 'AcademicDegreeController@create']);
   Route::get('/publications', ['as' => 'publications', 'uses' => 'PublicationController@create']);
   Route::get('/topics', ['as' => 'topics', 'uses' => 'TopicsController@create']);
   Route::get('/training', ['as' => 'training', 'uses' => 'trainingController@create']);
   Route::get('/child', ['as' => 'child','uses' => 'ChildController@create']);
   Route::get('/leave', ['as' => 'leave','uses' => 'LeavesController@create']);

/*---------------request form routes----------------------*/
    Route::post('/saveChildren', ['as' => 'saveChildren','uses' => 'ChildController@store']);
    Route::resource('/child', 'ChildController', ['only' => ['edit', 'update', 'destroy']]);

    Route::post('/saveLeave', ['as' => 'saveLeave','uses' => 'LeavesController@store']);
    Route::resource('/leave', 'LeavesController', ['only' => ['edit', 'update', 'destroy']]);

    
    Route::post('/saveOther', ['as' => 'saveOther','uses' => 'OtherController@store']);
   // Route::patch('/other/{id}', ['as' => 'updateOther','uses' => 'OtherController@update']);
    //Route::delete('/other/{id}', ['as' => 'deleteOther','uses' => 'OtherController@destroy']);
    //Route::get('other/{id}/edit', ['as' => 'editOther', 'uses' =>'OtherController@edit']);
    Route::resource('/other', 'OtherController', ['only' => ['edit', 'update', 'destroy']]);

    Route::post('/savePub', ['as' => 'savePub','uses' => 'PublicationController@store']);
    Route::resource('/publication', 'PublicationController', ['only' => ['edit', 'update', 'destroy']]);

    Route::post('/saveTraining', ['as' => 'saveTraining','uses' => 'TrainingController@store']);
    Route::resource('/training', 'TrainingController', ['only' => ['edit', 'update', 'destroy']]);
    

    Route::post('/saveTopic', ['as' => 'saveTopic','uses' => 'TopicsController@store']);
    Route::resource('/topic', 'TopicsController', ['only' => ['edit', 'update', 'destroy']]);
    // Route::get('/archives/topics', ['as' => 'processTopic','uses' => 'TopicsController@index']);

    Route::post('/saveDiploma', ['as' => 'saveDiploma','uses' => 'DiplomaController@store']);
    Route::resource('/diploma', 'DiplomaController', ['only' => ['edit', 'update', 'destroy']]);

    Route::post('/saveTitle', ['as' => 'saveTitle','uses' => 'AcademicTitleController@store']);
    Route::resource('/title', 'AcademicTitleController', ['only' => ['edit', 'update', 'destroy']]);


    Route::post('/saveDegree', ['as' => 'saveDegree','uses' => 'AcademicDegreeController@store']);
    Route::resource('/degree', 'AcademicDegreeController', ['only' => ['edit', 'update', 'destroy']]);


  
 
  Route::post('/logout', ['as' => 'logout', 'uses' =>'AuthController@logout']);

 // Route::resource('/', 'UserController', ['only' => ['edit', 'update']]);

  Route::get('/profile/{id}/edit', ['as' => 'edit', 'uses' =>'UserController@edit']);
  Route::patch('/profile/{id}', ['as' => 'update','uses' => 'UserController@update']);
  //Route::resource('/id', 'UserController', ['only' => ['edit', 'update']]);
  Route::get('/profile/{id}', ['as' => 'Authprofile', 'uses' =>'UserController@showProfile']);

  Route::get('/profile/{user_id}/editContact/{adress_id}', ['as' => 'edit', 'uses' =>'AdressController@edit']);
  Route::patch('/profile/{user_id}/{id}', ['as' => 'update','uses' => 'AdressController@update']);


  Route::patch('/profile/{id}/updatePassword', ['as' => 'updatePassword','uses' => 'AuthController@updatePassword']);

  });



   
   //we don't have to be connected to see a  teacher's profile when click on his name
  
  Route::get('/profile/{user_id}/archives', ['as' => 'archives', 'uses' =>'UserController@showArchives']);


    Route::get('profile/{user_id}/archives/leave', ['as' => 'processleave','uses' => 'LeavesController@index']);
    Route::get('profile/{user_id}/archives/other', [ 'as' => 'archivesOther', 'uses' => 'OtherController@index']);
    Route::get('profile/{user_id}/archives/diploma', [ 'uses' => 'DiplomaController@index']);
    Route::get('profile/{user_id}/archives/academicDegree', ['as' => 'processDegree','uses' => 'AcademicDegreeController@index']);
    Route::get('profile/{user_id}/archives/children', ['as' => 'children','uses' => 'ChildController@index']);
    Route::get('profile/{user_id}/archives/trainings', ['as' => 'processtraining','uses' => 'TrainingController@index']);
    Route::get('profile/{user_id}/archives/academicTitle', ['as' => 'processTitle','uses' => 'AcademicTitleController@index']);
    Route::get('profile/{user_id}/archives/topics', ['as' => 'processTopic','uses' => 'TopicsController@index']);
    Route::get('profile/{user_id}/archives/publications', ['as' => 'processPub','uses' => 'PublicationController@index']);
    
   Route::get('/archives/other/{id}', ['as' => 'singleOther', 'uses' =>'OtherController@show']);
   Route::get('/archives/academicTitle/{id}', ['as' => 'singlTitle', 'uses' =>'AcademicTitleController@show']);
   Route::get('/archives/academicDegree/{id}', ['as' => 'singlTitle', 'uses' =>'AcademicDegreeController@show']);
   Route::get('/archives/children/{id}', ['uses' =>'ChildController@show']);
   Route::get('/archives/topics/{id}', ['uses' =>'TopicsController@show']);
   Route::get('/archives/trainings/{id}', ['uses' =>'TrainingController@show']);
   Route::get('/archives/diploma/{id}', ['as' => 'singleDiploma', 'uses' =>'DiplomaController@show']);
   Route::get('/archives/leave/{id}', ['as' => 'singleLeave', 'uses' =>'LeavesController@show']);
   Route::get('/archives/publication/{id}', ['as' => 'singlePublication', 'uses' =>'PublicationController@show']);
   Route::get('/profile/{id}', ['as' => 'profile', 'uses' =>'UserController@show']);


   

});


