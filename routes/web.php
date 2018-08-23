<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){
	Route::get('/intranet', 'Intranet\HomeController@index');

	Route::get('/intranet/perfil', 'Intranet\UserController@index'); 
	Route::get('/intranet/editar-perfil/{user}', 'Intranet\UserController@edit');
	Route::put('/intranet/editar-perfil/{user}', 'Intranet\UserController@store');

	Route::get('/intranet/estudios', 'Intranet\EducationController@index');

	Route::get('/intranet/experiencia', 'Intranet\ExperiensController@index');

	Route::get('/intranet/trabajos', 'Intranet\PortfolioController@index');


});

//Ruta para ver la demo
Route::get('/demo', function() {
    return view ('demo.index');
});



