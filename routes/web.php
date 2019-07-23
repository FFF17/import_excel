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


Auth::routes();
Route::get('downloadExcel/{type}', 'SiswaController@downloadExcel');
Route::get('mahasiswa/index/cari','SiswaController@cari');
Route::get('mahasiswa/index', 'SiswaController@index');
Route::post('importExcel', 'SiswaController@importExcel');
Route::get('/downloadpdfsiswa/{id}', 'SiswaController@downloadpdfsiswa')->name('downloadpdfsiswa');

Route::get('/homepage', 'SiswaController@create');
Route::post('/homepage', 'SiswaController@save');
Route::post('editItem', 'SiswaController@update');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('autocomplete', 'SiswaController@search');
Route::get('/edit/{id}','SiswaController@edit');
Route::post('/edit','SiswaController@update');


//Dosen
Route::get('Dosen/index', 'DosenController@index');
Route::post('Dosen/importExcel', 'DosenController@import_dosen');



Route::get('menu_1/index', 'Menu1Controller@index');
Route::get('menu_1/index/cari','Menu1Controller@cari');
Route::get('menu_1/edit/{id}','Menu1Controller@edit');
Route::post('menu_1/update','Menu1Controller@update');

Route::get('/menu_1/downloadpdfsiswa/{id}', 'Menu1Controller@downloadpdfsiswa')->name('downloadpdfsiswa1');





Route::get('logout', 'HomeController@logout')->name('logout');
