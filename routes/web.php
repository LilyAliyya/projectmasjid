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

Route::get('/', 'PostsController@database');

Route::get('/biromasjid', 'BiroController@database');

Route::get('/penubuhan', 'PenubuhanController@database');

Route::get('/visimisi', 'VisimisiController@database');

Route::get('/pencapaian', 'PencapaianController@database');

Route::get('/gridaktiviti', 'GridAktivitiController@database');

Route::get('/senaraiaktiviti', 'SenaraiAktivitiController@database');

Route::get('/makluman', 'MaklumanController@database');

Route::get('/laporanaktiviti', 'LaporanAktivitiController@database');

Route::get('/videokhutbah', 'VideoKhutbahController@database');

Route::get('/kuliahharian', 'KuliahHarianController@database');

Route::get('/jawatankuasa', 'JawatankuasaMasjidController@database');

Route::get('/galerimasjid', 'GaleriMasjidController@database');

Route::get('/galerifasiliti', 'GaleriFasilitiController@database');

Route::get('/videomasjid', 'VideoMasjidController@database');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

