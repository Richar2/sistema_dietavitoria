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
Route::match(['get', 'post'],'/cadastro/savecad','SiteController@savecad');
Route::get('/','SiteController@test');
Route::get('/cadastro','SiteController@cadastro');
Route::get('/acompanhamento','SiteController@updatecad');

