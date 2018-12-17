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

Route::get('/', 'TopController@index');
Route::get('/detail/{id}', 'DetailController@index');
Route::get('/category/{category?}', 'ListController@category');
Route::get('/tag/{tag?}', 'ListController@tag');
