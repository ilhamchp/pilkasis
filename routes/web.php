<?php

use App\Http\Controllers\KandidatController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PerolehanSuaraController;
use App\Http\Controllers\PungutSuaraController;
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

Route::resource('kandidat', KandidatController::class);

Route::resource('pengguna', PenggunaController::class);

Route::resource('perolehan-suara', PerolehanSuaraController::class);

Route::get('pungut-suara/', [PungutSuaraController::class, 'index']);

Route::get('/profile', function () {
    return view('profil');
});