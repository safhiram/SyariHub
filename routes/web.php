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


Route::get('mitra-pengendara', 'PengendaraController@index');
Route::post('mitra-pengendara', 'PengendaraController@store');

Route::get('mitra-nanny', 'NannyController@index');
Route::post('mitra-nanny', 'NannyController@store');

Route::get('mitra-mentor', 'MentorController@index');
Route::post('mitra-mentor', 'MentorController@store');

Route::get('mitra-massage', function () {
    return view('mitra.massage');
});
Route::get('coba', function () {
    return view('coba');
});

