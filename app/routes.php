<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
Route::get('/', function()
{
	return View::make('hello');
});
*/


Route::get('/', array('as' => 'index','uses' => 'AlbumsController@getList'));

Route::get('/createalbum', array('as' => 'create_album_form','uses' => 'AlbumsController@getForm'));
Route::post('/createalbum', array('as' => 'create_album','uses' => 'AlbumsController@postCreate'));
Route::get('/deletealbum/{id}', array('as' => 'delete_album','uses' => 'AlbumsController@getDelete'));
Route::get('/album/{id}', array('as' => 'show_album','uses' => 'AlbumsController@getAlbum'));


Route::get('/addimage/{id}', array('as' => 'add_image','uses' => 'ImageController@getForm'));
Route::post('/addimage', array('as' => 'add_image_to_album','uses' => 'ImageController@postAdd'));
Route::get('/deleteimage/{id}', array('as' => 'delete_image','uses' => 'ImageController@getDelete'));

Route::post('/moveimage', array('as' => 'move_image', 'uses' =>'ImageController@postMove'));
