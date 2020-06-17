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
Route::view('/', 'home');

Route::get('/manga', 'MangaController@index')->name('manga');
Route::get('/manga/{manga:manga_id}', 'MangaController@show')->name('manga.show');
Route::get('/manga/page/{page?}', 'MangaController@index');
Route::get('/manga/{manga:manga_id}/chapter/{chapter:chapter_id}/', 'MangaController@chapter')->name('manga.chapter');

