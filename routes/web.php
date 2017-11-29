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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'MoviesController@index');

Route::get('/movies/{id}', 'MoviesController@show');

Route::get('/movies/categories/{category}', 'CategoriesController@index');

Route::post('/movies/{movie}/reviews', 'ReviewsController@store');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
