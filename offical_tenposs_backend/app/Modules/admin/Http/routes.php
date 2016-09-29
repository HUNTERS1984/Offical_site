<?php

/*
|--------------------------------------------------------------------------
| Module Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for the module.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::group(['prefix' => 'admin'], function() {
	Route::get('/', function() {
		dd('This is the Admin module index page.');
	});

	Route::get('login',['as'=>'admin.login','uses'=>'AuthController@getLogin']);
	Route::post('login',['as'=>'admin.login.post','uses'=>'AuthController@postLogin']);
	Route::get('register',['as'=>'admin.register','uses'=>'AuthController@getRegister']);
	Route::post('register',['as'=>'admin.register.post','uses'=>'AuthController@postRegister']);
	

	Route::group(['middleware'=>['web']],function(){
		Route::get('dashboard',['as'=>'admin.dashboard','uses'=>'AdminController@index']);
		Route::get('logout','AdminController@getLogout');

		// BLOG
		Route::post('blog/status',['as'=>'admin.blog.status','uses'=>'BlogController@status']);
		Route::resource('blog','BlogController');

		// INTERGRATION
		Route::post('intergration/status',['as'=>'admin.intergration.status','uses'=>'IntergrationController@status']);
		Route::resource('intergration','IntergrationController');

		// NEWS
		Route::post('news/status',['as'=>'admin.news.status','uses'=>'NewsController@status']);
		Route::resource('news','NewsController');

		// PARTNERSHIP
		Route::post('partnership/status',['as'=>'admin.partnership.status','uses'=>'PartnershipController@status']);
		Route::resource('partnership','PartnershipController');

		// STARTGUIDE
		Route::post('startguide/status',['as'=>'admin.startguide.status','uses'=>'StartguideController@status']);
		Route::resource('startguide','StartguideController');


	});
});
