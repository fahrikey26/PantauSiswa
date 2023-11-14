<?php

use App\Http\Controllers\DashboardCon;
use App\Http\Controllers\LoginCon;
use App\Http\Controllers\SiswaCon;
use Illuminate\Support\Facades\Route;

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

Route::get('/pantausiswa', function () {
    return view('/authentication/login');
});

Route::get('/login', [LoginCon::class, 'loginForm'])->name('login');
Route::get('/logout', [LoginCon::class, 'logout']);
Route::post('/ceklogin', [LoginCon::class, 'loginCek']);

Route::get('/dashboard', [DashboardCon::class, 'index']);

Route::get('/siswa', [SiswaCon::class, 'index']);
Route::get('/siswa/edit/{id}', [SiswaCon::class, 'tampiledit']);
Route::post('/siswa/update', [SiswaCon::class, 'update']);

Route::get('/pengguna', function () {
    return view('/pengguna/pengguna');
});
