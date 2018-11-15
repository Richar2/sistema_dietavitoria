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
Route::match(['get', 'post'],'/cadastro/savecad/acompanhamento','SiteController@acompanhamento');

Route::get('/dashboard/searchAluno','SiteController@searchAluno');
Route::get('aluno','SiteController@acompanhamento');


