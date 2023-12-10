<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ModalController;
use App\Http\Controllers\ResikoController;
use App\Http\Controllers\SkalaUsahaController;
use App\Http\Controllers\KbliController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\JenisPerusahaanController;
use App\Http\Controllers\PerusahaanController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('dashboard', DashboardController::class);
Route::resource('register', LayoutController::class);
Route::resource('proyek', ProyekController::class);
Route::resource('modal', ModalController::class);
Route::resource('resiko', ResikoController::class);
Route::resource('skalausaha', SkalaUsahaController::class);
Route::resource('kbli', KbliController::class);
Route::resource('kecamatan', KecamatanController::class);
Route::resource('desa', DesaController::class);
Route::resource('jenis_perusahaan', JenisPerusahaanController::class);
//Route::resource('perusahaan', PerusahaanController::class);

Route::get('/pusbakor/perusahaan', [PerusahaanController::class, 'index'])->name('perusahaan.index');
    Route::get('/pusbakor/perusahaan/{id}/edit', [PerusahaanController::class, 'edit'])->name('perusahaan.edit');
    Route::get('/pusbakor/perusahaan/{id}', [PerusahaanController::class, 'destroy'])->name('perusahaan.destroy');
    Route::post('/pusbakor/perusahaan/{id}', [PerusahaanController::class, 'update'])->name('perusahaan.update');
    Route::get('/perusahaan/create', [PerusahaanController::class, 'create'])->name('perusahaan.create');
    Route::post('/perusahaan/store', [PerusahaanController::class, 'store'])->name('perusahaan.store');








