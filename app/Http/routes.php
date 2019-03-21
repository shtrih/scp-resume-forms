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
    return view('index');
});

Route::group(['prefix' => 'resume'], function () {
    Route::post('programmer', 'FormHandler@store');
    Route::post('artist', 'FormHandler@store');
    Route::post('translator', 'FormHandler@store');
    Route::post('voice-actor', 'FormHandler@store');
    Route::post('sound-composer', 'FormHandler@store');
});
