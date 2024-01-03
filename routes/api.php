<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\Auth\LoginController;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


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
Route::middleware(['auth:sanctum'])->get('/user/revoke',function (Request $request) {
    $user = $request->user();
    $user->tokens()->delete();
    return 'Tokens are deleted';
});

Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'device_name' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return $user->createToken($request->device_name)->plainTextToken;
});

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
