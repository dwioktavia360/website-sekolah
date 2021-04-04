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


Route::group(['middleware' => ['auth', 'checkRole:admin']], function()
{
	Route::get('/pengguna', 'PenggunaController@index');
	Route::get('/pengguna/insert', 'PenggunaController@insert');
	Route::post('/pengguna/create', 'PenggunaController@create');
	Route::get('/pengguna/{id}/edit', 'PenggunaController@edit');
	Route::post('/pengguna/{id}/update', 'PenggunaController@update');
	Route::get('/pengguna/{id}/delete', 'PenggunaController@delete');


});

//Route::get('siswa','SiswaController@index
Route::group(['middleware' => ['auth', 'checkRole:siswa']], function()
{
	Route::get('/siswa/materi','MateriSiswaController@index');
	Route::get('/siswa/assignment','assignmentsSiswaController@index');
	Route::get('/siswa/presence','StudentPresencesController@index');
	Route::get('/siswa/presence/index','StudentPresencesController@index');
	Route::post('/presence/store','StudentPresencesController@store');

	
});

Route::group(['middleware' => ['auth', 'checkRole:guru']], function()
{
	Route::get('assignment/index','AssignmentsController@index');
	Route::get('assignment','AssignmentsController@index');
	Route::get('assignment/create','AssignmentsController@create');
	Route::get('assignment/{assignment}','AssignmentsController@show');
	Route::post('assignment','AssignmentsController@store');
	Route::delete('assignment/{assignment}','AssignmentsController@destroy');
	Route::get('assignment/{assignment}/edit','AssignmentsController@edit');
	Route::patch('assignment/{assignment}','AssignmentsController@update');
	
	Route::get('presence','PresencesController@index');

	Route::get('materi/index','MaterisController@index');
	Route::get('materi','MaterisController@index');
	Route::get('materi/create','MaterisController@create');
	Route::get('materi/{materi}','MaterisController@show');
	Route::post('materi','MaterisController@store');
	Route::delete('materi/{materi}','MaterisController@destroy');
	Route::get('materi/{materi}/edit','MaterisController@edit');
	Route::patch('materi/{materi}','MaterisController@update');
});

Auth::routes();

Route::group(['middleware' => ['auth', 'checkRole:admin,siswa,guru']], function()
{

	Route::get('/home', 'HomeController@index')->name('home');
});