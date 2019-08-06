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

//untuk mitra
Route::get('mitra-pengendara', 'PengendaraController@index');
Route::post('mitra-pengendara', 'PengendaraController@store');

Route::get('mitra-nanny', 'NannyController@index');
Route::post('mitra-nanny', 'NannyController@store');

Route::get('mitra-mentor', 'MentorController@index');
Route::post('mitra-mentor', 'MentorController@store');

Route::get('mitra-massage', 'MassageController@index');
Route::post('mitra-massage', 'MassageController@store');

//untuk per-layanan
Route::get('ride', function () {
    return view('layanan.ride');
});
Route::get('ride-bulanan', function () {
    return view('layanan.ride-bulanan');
});
Route::get('nanni', function () {
    return view('layanan.nanni');
});
Route::get('massage', function () {
    return view('layanan.massage');
});
Route::get('ngaji', function () {
    return view('layanan.ngaji');
});
Route::get('catering', function () {
    return view('layanan.catering');
});
Route::get('store', function () {
    return view('layanan.store');
});

//untuk tentang kami
Route::get('tentang-kami', function () {
    return view('tentang-kami');
});

Route::get('coba', function () {
    return view('coba');
});
Route::get('coba2', function () {
    return view('coba2');
});

