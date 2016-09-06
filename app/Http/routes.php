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

Route::get('/', function() {
    $articles = DB::table('articles')->get();

    return View::make('welcome')->with('articles', $articles);
});

Route::post('add', 'Controller@get_data');

Route::get('article/{id}', function($id) {
    $article = DB::table('articles')->where('id', $id)->first();
    return View::make('article')->with('article', $article);
});
