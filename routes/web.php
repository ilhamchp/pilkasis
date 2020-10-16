<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\LoginController;
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


Route::resource('kandidat', KandidatController::class);

Route::resource('pengguna', PenggunaController::class);

Route::resource('perolehan-suara', PerolehanSuaraController::class);

Route::get('pungut-suara/', [PungutSuaraController::class, 'index']);

Route::post('pungut-suara/pilih/{kandidat}', [PungutSuaraController::class, 'pungutSuara'])->name('pungut-suara.pilih');

Route::get('login', [LoginController::class, 'index']);

Route::get('home', HomeController::class);

Route::post('login/auth', [LoginController::class, 'authenticate']);

Route::get('logout', [LoginController::class, 'logout']);

Route::get('/profile', function () {
    return view('profil');
});