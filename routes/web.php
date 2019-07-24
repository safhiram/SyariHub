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
Route::get('mitra-pengendara', function () {
    return view('mitra.pengendara');
});
Route::get('mitra-nanny', function () {
    return view('mitra.nanny');
});
Route::get('mitra-mentor', function () {
    return view('mitra.mentor');
});
Route::get('mitra-massage', function () {
    return view('mitra.massage');
});
Route::get('coba', function () {
    return view('coba');
});

