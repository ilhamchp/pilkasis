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

Route::get('/home', function () {
    return view('beranda');
});

Route::get('/kandidat', function () {
    return view('kandidat');
});

Route::get('/pengguna', function () {
    return view('pengguna');
});


Route::get('/perolehan-suara', function () {
    return view('perolehan_suara');
});

Route::get('/profile', function () {
    return view('profil');
});

Route::get('/pungut-suara', function () {
    return view('pungut_suara');
});