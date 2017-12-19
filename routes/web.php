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

Route::any('/phpinfo', function() {
    phpinfo();
});

Route::get('/hello/{name}', 'HomeController@home');
Route::get('/home', 'HomeController@homeview');
Route::get('/redirect', 'HomeController@redirect');
Route::get('/withredirect/{name}', [
'as' => 'homeredirected',
'uses' => 'HomeController@home',
]);

Route::get('/home/{numero}', function($numero) {
    return 'Article numéro ' . $numero;
})->where('numero', '[0-9]+');

Route::group([
'prefix' => 'test'
], function() {
    
    Route::get('', function() {
        return 'Hello World !';
    });
    
    Route::any('{name}', function($nom) {
        return "Bonjour $nom !";
    });
});


// -----------------------
// Movies
// -----------------------

Route::get('movies', [
    'as' => 'movieslisting',
    'uses' => 'MoviesController@all'
]);

Route::get('movies/{id}', [
    'as' => 'moviesdetail',
    'uses' => 'MoviesController@detail'
]);

Route::get('admin/insert', [
    'as' => 'admininsert',
    'uses' => 'AdminController@insert'
]);
Route::get('admin/update/{id}', [
    'as' => 'adminupdate',
    'uses' => 'AdminController@update'
]);
Route::post('admin/valid', [
    'as' => 'adminvalid',
    'before' => 'csrf',
    'uses' => 'AdminController@valid'
]);