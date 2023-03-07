<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeControlle@index')->name('home');

// Route::get('/create', function () {
//    return view('posts.create');
// });

Route::get('/posts/{id}', 
'PostController@show')->name
('posts.show');

Route::get('/posts/{id}/edit', 
'PostController@edit')->name
('posts.edit');

Route::put('/posts/{id}', 
'PostController@update')->name
('posts.update');


