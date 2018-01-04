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
	$audio = asset('audio/Audio.mp3');
	$audioBackground = 'https://drive.google.com/uc?export=view&id=1_-fo7LTVWWBDY3IE8RhKNnzbyTdGOcBc';
    return view('welcome', compact('audio', 'audioBackground'));
});
