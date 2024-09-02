<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\InputAspirasiController;


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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('siswa', 'SiswaController')->middleware('auth');
Route::resource('kategori', 'KategoriController')->middleware('auth');
Route::resource('inputaspirasi','InputAspirasiController');
Route::resource('aspirasi', 'AspirasiController')->middleware('auth');
Route::get('/laporan', [InputAspirasiController::class, 'laporan']);
Route::get('/laporan/cetak', [InputAspirasiController::class,'pdf'])->middleware('auth');

Route::get('/profil', 'InputAspirasiController@profil');
Route::get('/search', 'InputAspirasiController@search');
