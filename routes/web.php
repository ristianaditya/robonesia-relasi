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

// Studi
Route::get('/studi', 'StudiController@index')->name('studi.index');
Route::get('/studi/create', 'StudiController@create')->name('studi.create');
Route::post('/studi', 'StudiController@store')->name('studi.store');

// Mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa.index');
Route::get('/mahasiswa/create', 'MahasiswaController@create')->name('mahasiswa.create');
Route::post('/mahasiswa', 'MahasiswaController@store')->name('mahasiswa.store');

//Mata Kuliah
Route::get('/mata-kuliah', 'MataKuliahController@index')->name('mata-kuliah.index');
Route::get('/mata-kuliah/create', 'MataKuliahController@create')->name('mata-kuliah.create');
Route::post('/mata-kuliah', 'MataKuliahController@store')->name('mata-kuliah.store');

// Wali Kuliah
Route::get('/wali-kuliah', 'WaliKuliahController@index')->name('wali-kuliah.index');

