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


//*Route::prefix('admin')->middleware('auth')->namespace('Admin')->group(function(){
  //  Route::resource('', 'MeuControladorController');
//});

//Route::get('/dash', 'SiteController@dash');



Route::get('/','Auth\LoginController@autetinficado');
Route::post('/cadastro/savecad', 'SiteController@savecad');
Route::get('dash', 'SiteController@dash')->name('dash');
Route::get('/dash/cadastro', 'SiteController@cadastro');
Route::get('/dash/searchAluno', 'SiteController@searchAluno');
Route::get('/dash/searchAluno/{id}/acompanhamento', 'SiteController@acompanhamento')->name('aluno.acompanhamento');
Route::post('login','Auth\LoginController@login')->name('login');
Route::post('logout','Auth\LoginController@logout')->name('logout');



//Route::get('/', 'SiteController@login');
//Route::post('/',['as' =>'user.login', 'HomeController@index']);






//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
