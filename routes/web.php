<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'studi' , 'as' => 'studi.'], function () {
    Route::get('/' , 'StudiController@index')->name('index');
    Route::get('/create' , 'StudiController@create')->name('create');
    Route::post('/' , 'StudiController@store')->name('store');
});

Route::group(['prefix' => 'mahasiswa' , 'as' => 'mahasiswa.'], function () {
    Route::get('/' , 'MahasiswaController@index')->name('index');
    Route::get('/create' , 'MahasiswaController@create')->name('create');
    Route::post('/' , 'MahasiswaController@store')->name('store');
});

//Mata Kuliah
Route::get('/mata-kuliah', 'MataKuliahController@index')->name('mata-kuliah.index');
Route::get('/mata-kuliah/create', 'MataKuliahController@create')->name('mata-kuliah.create');
Route::post('/mata-kuliah', 'MataKuliahController@store')->name('mata-kuliah.store');

// Wali Kuliah
Route::get('/wali-kuliah', 'WaliKuliahController@index')->name('wali-kuliah.index');

//Nilai
Route::get('/nilai', 'NilaiController@index')->name('nilai.index');
Route::get('/nilai/create', 'NilaiController@create')->name('nilai.create');
Route::post('/nilai', 'NilaiController@store')->name('nilai.store');


