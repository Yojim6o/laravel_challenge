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

Route::get('/', 'Controller@get_data');

// Route::get('/', function() {
//     $projects = DB::table('projects')->get();

//     return View::make('welcome')->with('projects', $projects);
// });

// Route::post('add', function() {
//     $name = htmlspecialchars($_POST["name"]);

//     if (DB::table('projects')->whereName($name)->first() !== null) return 'Already Exists!';

//     DB::table('projects')->insert(array('name' => $name));

//     return Redirect::to('/');
// });

// Route::post('donate', function() {
//     $donation = htmlspecialchars($_POST["donation"]);
//     $id = htmlspecialchars($_POST["id"]);

//     DB::table('projects')->where('id', $id)->increment('money', $donation);

//     return Redirect::to('/');
// });
