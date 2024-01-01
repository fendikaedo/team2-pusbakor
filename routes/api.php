<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\Auth\LoginController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::resource('profile', ApiController::class);
Route::resource('dashboard', ApiController::class);
Route::resource('tables', ApiController::class);
Route::resource('proyek', ApiController::class);
Route::resource('modal', ApiController::class);
Route::resource('resiko', ApiController::class);
Route::resource('skalausaha', ApiController::class);
Route::resource('kbli', ApiController::class);
Route::resource('kecamatan', ApiController::class);
Route::resource('desa', ApiController::class);
Route::resource('jenis_perusahaan', ApiController::class);
Route::resource('perusahaan', ApiController::class);
Route::resource('user', ApiController::class);
