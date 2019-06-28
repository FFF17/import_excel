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


Route::get('downloadExcel/{type}', 'SiswaController@downloadExcel');

Route::get('/siswa/cari','SiswaController@cari');
Route::get('/siswa', 'SiswaController@index');
Route::post('importExcel', 'SiswaController@importExcel');
Route::get('/downloadpdfsiswa/{id}', 'SiswaController@downloadpdfsiswa')->name('downloadpdfsiswa');
Route::get('logout', 'HomeController@logout')->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/edit/{id}','SiswaController@edit');
Route::post('/edit','SiswaController@update');
 Route::get('autocomplete', 'SiswaController@search');


//Dosen
Route::get('Dosen/index', 'DosenController@index');
Route::post('Dosen/importExcel', 'DosenController@import_dosen');
