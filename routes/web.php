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
//Route::get('/mahasiswa', 'MahasiswaController@index');	
//Route::get('/mahasiswa/create', 'MahasiswaController@create'); Route::post('/mahasiswa', 'MahasiswaController@store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/mahasiswa/create', [App\Http\Controllers\MahasiswaController::class, 'create']);
Route::post('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'store'])->name('mahasiswa');
Route::get('mahasiswa/{id}/lihat', [App\Http\Controllers\MahasiswaController::class, 'lihat']);

Route::get('mahasiswa/search', [App\Http\Controllers\MahasiswaController::class, 'search'])->name('search');

Route::get('mahasiswa/{id}/edit', [App\Http\Controllers\MahasiswaController::class, 'edit']);
Route::patch('mahasiswa/{id}', [App\Http\Controllers\MahasiswaController::class, 'update']);
Route::delete('mahasiswa/{id}', [App\Http\Controllers\MahasiswaController::class, 'destroy'])->name('mahasiswa');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');