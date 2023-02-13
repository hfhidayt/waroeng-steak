<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PerawatanController;
use App\Http\Controllers\JenisPerawatanController;
use App\Http\Controllers\JenisKendaraanController;
use App\Http\Controllers\BahanBakarController;
use App\Http\Controllers\JabatanPegawaiController;
use App\Http\Controllers\MerkController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PenjualanController;
use App\Models\JabatanPegawai;
use App\Models\JenisPerawatan;
use App\Models\Kendaraan;
use App\Models\Pegawai;
use App\Models\Perawatan;
use App\Models\User;
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
        'title' => 'Dashboard',
        'kendaraan' => Kendaraan::count(),
        'user' => User::count(),
        'perawatan' => Perawatan::all()->sum('total_biaya'),
        'kendaraans' => Kendaraan::all(),
        'perawatans' => Perawatan::all(),
        'jenis_perawatan' => JenisPerawatan::all()
    ]);
})->middleware('auth');

Route::get('/dashboard/laporan/perawatan/kendaraan', function () {
    return view('dashboard.kendaraan.perawatan.laporan', [
        'title' => 'Laporan Biaya Perawatan',
        'perawatan' => Perawatan::all(),
        'pegawai' => Pegawai::all(),
        'jabatan' => JabatanPegawai::all()
    ]);
})->middleware('auth');

Route::get('/dashboard/rincian/perawatan/kendaraan', function () {
    return view('dashboard.kendaraan.perawatan.rincian', [
        'title' => 'Rincian Biaya Perawatan',
        'perawatan' => Perawatan::all(),
        'pegawai' => Pegawai::all(),
        'jabatan' => JabatanPegawai::all()
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

Route::resource('/dashboard/merk/kendaraan', MerkController::class)->except('create', 'show', 'edit')->middleware('auth');

Route::resource('/dashboard/jenis/kendaraan', JenisKendaraanController::class)->except('create', 'show', 'edit')->middleware('auth');

Route::resource('/dashboard/bahanbakar/kendaraan', BahanBakarController::class)->except('create', 'show', 'edit')->middleware('auth');

Route::resource('/dashboard/akun', UserController::class)->except('create', 'show', 'edit')->middleware('admin');

Route::resource('/dashboard/pegawai', PegawaiController::class)->except('create', 'show', 'edit')->middleware('admin');

Route::resource('/dashboard/jabatan/pegawai', JabatanPegawaiController::class)->except('create', 'show', 'edit')->middleware('admin');
