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

Route::get('/test', function (){
    $data2 = ['hello' => 'oldFriend'];
   
    return view('welcome', ['data2'=> $data2['hello']]);
});

Route::get('/snippets', 'SnippetsController@index');