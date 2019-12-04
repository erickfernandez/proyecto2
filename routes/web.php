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

Route::get('/', function () {
    return view('showgaleria');
})->name('galeria');

Route::get('/', function () {
    return view('home');
})->name('noticia');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/showgaleria', 'HomeController@index')->name('galerias');


Route::get('menu-test', 'MenuController@index');