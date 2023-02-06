<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PerawatanController;
use App\Http\Controllers\JenisPerawatanController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PenjualanController;
use App\Models\Kendaraan;
use App\Models\Perawatan;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard'
    ]);
})->middleware('auth');

Route::get('/dashboard/print/perawatan/kendaraan', function () {
    return view('dashboard.kendaraan.perawatan.print', [
        'title' => 'Print',
        'perawatan' => Perawatan::all(),
    ]);
})->middleware('auth');

Route::get('/dashboard/pajak/kendaraan', function () {
    return view('dashboard.kendaraan.pajak', [
        'title' => 'Pajak',
        'kendaraan' => Kendaraan::all(),
    ]);
})->middleware('auth');

Route::resource('/dashboard/kendaraan', KendaraanController::class)->except('create', 'show', 'edit')->middleware('auth');

Route::resource('/dashboard/pembelian/kendaraan', PembelianController::class)->except('create', 'show', 'edit')->middleware('auth');

Route::resource('/dashboard/penjualan/kendaraan', PenjualanController::class)->except('create', 'show', 'edit')->middleware('auth');

Route::resource('/dashboard/perawatan/kendaraan', PerawatanController::class)->except('create', 'show', 'edit')->middleware('auth');

Route::resource('/dashboard/jenis/perawatan/kendaraan', JenisPerawatanController::class)->except('create', 'show', 'edit')->middleware('auth');

Route::resource('/dashboard/akun', UserController::class)->except('create', 'show', 'edit')->middleware('admin');
