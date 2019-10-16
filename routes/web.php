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
Route::get('mahasiswa/cari','SiswaController@cari')->name('siswa.cari');
Route::get('mahasiswa/index', 'SiswaController@index');
Route::post('importExcel', 'SiswaController@importExcel');
Route::get('/downloadpdfsiswa/{id}', 'SiswaController@downloadpdfsiswa')->name('downloadpdfsiswa');

Route::get('/homepage', 'SiswaController@create');
Route::post('/homepage', 'SiswaController@save');
Route::get('autocomplete', 'SiswaController@search_dosen');

Route::post('editItem', 'SiswaController@update');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('autocomplete', 'SiswaController@search');
Route::get('/edit/{id}','SiswaController@edit');
Route::post('/edit','SiswaController@update');


//Dosen
Route::get('Dosen/index', 'DosenController@index');
Route::post('Dosen/importExcel', 'DosenController@import_dosen');



Route::get('menu_1/index', 'Menu1Controller@index');
Route::get('print/index_dosen/cari','OutputController@cari')->name('output.search');

Route::get('print/index/{id}', 'OutputController@index')->name('print.show');
Route::get('print/pdfall/{id}', 'OutputController@download_allsiswa')->name('print.pdfall');
Route::get('print/pdfall1/{id}', 'OutputController@download_allsiswa1')->name('print.pdfall1');

Route::get('print/edit_dosen/{id}','OutputController@edit')->name('dosen.edit');
Route::post('print/edit_dosen/','OutputController@update')->name('dosen.update');
Route::get('print/index_dosen/','OutputController@index_dosen')->name('dosen.index');

Route::get('menu_1/index/cari','Menu1Controller@cari')->name('menu_1.search');
Route::get('menu_1/edit/{id}','Menu1Controller@edit');
Route::post('menu_1/update','Menu1Controller@update');

Route::get('/menu_1/downloadpdfsiswa/{id}', 'Menu1Controller@downloadpdfsiswa')->name('downloadpdfsiswa1');
Route::get('/menu_1/downloadpdfsiswa2/{id}', 'Menu1Controller@downloadpdfsiswa2')->name('downloadpdfsiswa2');
Route::get('/menu_1/downloadpdfsiswa3/{id}', 'Menu1Controller@downloadpdfsiswa3')->name('downloadpdfsiswa3');


Route::post('/homepage/getDosen/','SiswaController@getDosen')->name('homepage.getDosen');


Route::get('Dosen/index/cari','DosenController@cari')->name('dosen.search');

Route::get('/mahasiswa/hapus/{id}','SiswaController@delete')->name('siswa.destroy');


Route::resource('prodi', 'ProdiController');
	


/*Route::get('logout', 'HomeController@logout')->name('logout');
*/
