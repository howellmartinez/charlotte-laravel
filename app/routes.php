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

Route::get('/', function()
{
	return View::make('home');
});

Route::post('/upload', function()
{
	$file = Input::file('file');
    $extension = File::extension($file->getClientOriginalName());
    $directory = 'uploads';
    $filename =  $file->getClientOriginalName();

    $upload_success = Input::file('file')->move($directory);
});
