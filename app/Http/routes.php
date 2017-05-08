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
/****** RUTAS DE LA PAGINA PRINCIPAL ******/
Route::get('/', [
	'uses'	=>	'PropertiesController@principal',
	'as'	=>	'welcome'
]);
Route::get('detailproperty/{id}', [
	'uses'	=>	'DetailPropertyController@show',
	'as'	=>	'detailproperty'
]);
Route::get('search',[
	'uses' =>	'SearchController@index',
	'as'   => 	'search'
]);
Route::get('sale', [
	'uses'	=> 	'SaleController@index',
	'as'	=>	'sale'
]);
Route::get('infoempresa', [
	'uses'	=>	'PropertiesController@infoempresa',
	'as'	=>	'infoempresa'
]);



/******* RUTAS DEL PANEL DE ADMINISTRACION ******/
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
	Route::resource('users', 'UsersController');
	Route::get('users/{id}/destroy', [
		'uses' 	=> 'UsersController@destroy',
		'as' 	=> 'admin.users.destroy'
	]);

	Route::resource('categories', 'CategoriesController');
	Route::get('categories/{id}/destroy', [
		'uses' 	=> 'CategoriesController@destroy',
		'as'	=> 'admin.categories.destroy'
	]);

	Route::resource('typeproperties', 'TypePropertiesController');
	Route::get('typeproperties/{id}/destroy',[
		'uses'	=>	'TypePropertiesController@destroy',
		'as'	=>	'admin.typeproperties.destroy'
	]);

	Route::resource('zones', 'ZonesController');
	Route::get('zones/{id}/destroy',[
		'uses'	=>	'ZonesController@destroy',
		'as'	=>	'admin.zones.destroy'
	]);

	Route::resource('states', 'StatesController');
	Route::get('states/{id}/destroy',[
		'uses'	=>	'StatesController@destroy',
		'as'	=>	'admin.states.destroy'
	]);

	Route::resource('ownercurrents', 'OwnerCurrentsController');
	Route::get('ownercurrents/{id}/destroy', [
		'uses' 	=> 'OwnerCurrentsController@destroy',
		'as'	=>	'admin.ownercurrents.destroy'
	]);

	Route::resource('properties', 'PropertiesController');
	Route::get('properties/{id}/create',[
		'uses'	=>	'PropertiesController@create',
		'as'	=>	'admin.properties.create'
		]);

	Route::resource('images', 'ImagesController');

});


Route::get('admin/auth/login', [
	'uses'	=>	'Auth\AuthController@getLogin',
	'as'	=>	'admin.auth.login'
]);
Route::post('admin/auth/login', [
	'uses'	=>	'Auth\AuthController@postLogin',
	'as'	=>	'admin.auth.login'

]);	
Route::get('admin/auth/logout', [
	'uses'	=>	'Auth\AuthController@getLogout',
	'as'	=>	'admin.auth.logout'
]);
