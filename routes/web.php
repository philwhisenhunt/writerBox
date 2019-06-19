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

// Route::get('/', function (){
//     $data2 = ['hello' => 'oldFriend'];
   
//     return view('welcome', ['data2'=> $data2['hello']]);
// });

//Route::get('/snippets', 'SnippetsController@index');

//Route::get('/snippets/{$snippetTitle}', 'SnippetsController@singlePost');

//Route::get('/snippets/create', 'SnippetsController@create');
 
//Route::get('/snippets/post{$id}', 'SnippetsController@show');

Route::get('/users/{user}', function (App\User $user) {
    return $user->email;
});

//Route::get('/snippets/{snippet}', 'SnippetsController@show');
Route::get('snippets/{snippet}/edit', 'SnippetsController@edit');
Route::get('/snippets/create', 'SnippetsController@create');


Route::get('/snippets/{id}', 'SnippetsController@singlePost');
Route::get('/layoutviewer', function(){
    return view('layout');
});

Route::get('/snippets/{id}/edit', 'SnippetsController@edit');
Route::post('/snippets/{id}/edit', 'SnippetsController@update');
Route::get('/snippets/{id}/delete', 'SnippetsController@destroy');
Route::post('/snippets/{id}/delete', 'SnippetsController@destroy'); //would this overwrite it?

Route::get('/snippets', 'SnippetsController@index');
Route::post('/snippets/create', 'SnippetsController@create');

// Route::get('/snippets/create', 'SnippetsController@make');


/*
GET /snippets (index of all of them)
GET /snippets/create (create a new one)
GET /snippets/1 (show an existing one with an id that matches 1)
POST /snippets (store)
GET /projects/1/edit (edit)
PATCH /projects/1 (update)
DELETE /projects/1 (destroy)

*/