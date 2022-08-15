<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Beranda;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\SkripsiController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('login', [LoginController::class, 'index'])->name('login');

Route::get('/', [LayoutController::class, 'index'])->middleware('auth');
Route::get('/home', [LayoutController::class, 'index'])->middleware('auth');


Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::post('login/proses', 'proses');
    Route::get('logout', 'logout');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cekUserLogin:1']], function () {
        Route::resource('dosen', DosenController::class);
        Route::resource('skripsi', SkripsiController::class);
        Route::post('dosen/store', [DosenController::class, 'store'])->middleware('auth');
        Route::post('skripsi/store', [SkripsiController::class, 'store'])->middleware('auth');
        Route::get('skripsi-nilai/{id}', [SkripsiController::class, 'formPenilaian'])->middleware('auth');
        Route::put('skripsi-nilai-store/{id}', [SkripsiController::class, 'storeNilai'])->middleware('auth');
        Route::get('skripsi/{id}/edit', [SkripsiController::class, 'edit'])->middleware('auth');
        Route::get('skripsi/{id}', [SkripsiController::class, 'destroy'])->middleware('auth');
        Route::put('skripsi/{id}', [SkripsiController::class, 'update'])->middleware('auth');
        
    });

    Route::group(['middleware' => ['cekUserLogin:2,1']], function () {
        Route::get('skripsi/create', [SkripsiController::class, 'create'])->middleware('auth'); 
        Route::get('skripsi', [SkripsiController::class, 'index'])->middleware('auth');
        Route::get('skripsi-nilai/{id}', [SkripsiController::class, 'formPenilaian'])->middleware('auth');
        Route::put('skripsi-nilai-store/{id}', [SkripsiController::class, 'storeNilai'])->middleware('auth');


    });

    Route::group(['middleware' => ['cekUserLogin:3,2,1']], function () {
         
        Route::get('skripsi', [SkripsiController::class, 'index'])->middleware('auth');
        Route::get('skripsi-nilai/{id}', [SkripsiController::class, 'formPenilaian'])->middleware('auth');
        Route::put('skripsi-nilai-store/{id}', [SkripsiController::class, 'storeNilai'])->middleware('auth');


    });
});

