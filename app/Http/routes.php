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

Route::get('/', function () {
    return view('welcome');
});

Route::get('newpage', 'MyController@returningASimplePage');

Route::get('/', 'PagesController@home');

Route::get('twitter', 'TwitterController@twitter');

//requesting a new page
Route::get('/hello', function() {
        echo "<h1>HELLO </h1>";
});

//Route::any('any', function (){  
     // return "Anything is possible if you try hard!"; 
   // });

//command to prevent cross-site request forger
Route::when('*', 'csrf', ['post', 'put','patch']);

Route::get('about', 'TwitterController@about');
Route::get('/contact', 'TwitterController@contact');

Route::group(['prefix' => 'api'], function ()
{
    Route::resource('twitter', 'TwitterController', 
        array('only' => array('index', 'store', 'show', 'destroy')));
});


Route::group(['prefix' => 'api/v2'], function ()
{
    Route::resource('link', 'LinkController', 
        array('only' => array('index', 'store', 'show', 'destroy')));
});

Route::get('insert', 'StudentController@insertform');
Route::post('create', 'StudentController@insert');


Route::group(['prefix' => 'api/v3'], function ()
{
    Route::resource('store', 'StoreController', 
        array('only' => array('index', 'store', 'show','update', 'destroy')));
});
