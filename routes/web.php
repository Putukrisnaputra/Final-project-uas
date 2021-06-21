<?php

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LatarBelakangController;
use App\Http\Controllers\DataKegiatanController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TugasFungsiController;
use App\Http\Controllers\BerandaKegiatanController;
use App\Http\Controllers\BerandaRencanaStrategisController;
use App\Http\Controllers\LayananInformasiController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\FormulirPengaduanController;
use App\Http\Controllers\RencanaStrategisController;
use App\Http\Controllers\TahunanController;

use App\Http\Controllers\SemesterController;
use App\Http\Controllers\TriwulanController;
use App\Http\Controllers\KinerjaController;
use App\Http\Controllers\PpidController;
use App\Http\Controllers\BerandaTahunanController;
use App\Http\Controllers\BerandaSemesterController;
use App\Http\Controllers\BerandaTriwulanController;
use App\Http\Controllers\BerandaKinerjaController;
use App\Http\Controllers\BerandaPpidController;
use App\Http\Controllers\ContactController;

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

Route::get('/',[DashboardController::class, 'index']);
Route::get('/tugasfungsi',[TugasFungsiController::class, 'index']);
Route::get('/latarbelakang',[LatarBelakangController::class, 'index']);
Route::get('/berandakegiatan',[BerandaKegiatanController::class, 'index']);
Route::get('/datakegiatan',[DataKegiatanController::class, 'index']);

Route::get('/berandarencanastrategis',[BerandaRencanaStrategisController::class, 'index']);
Route::get('/berandatahunan',[BerandaTahunanController::class, 'index']);
Route::get('/berandarencanastrategis',[BerandaRencanaStrategisController::class, 'index']);
Route::get('/berandasemester',[BerandaSemesterController::class, 'index']);
Route::get('/layananinformasi',[LayananInformasiController::class, 'index']);
Route::get('/forminformasi',[FormulirController::class, 'index']);
Route::get('/formpengaduan',[FormulirPengaduanController::class, 'index']);
Route::get('/berandatriwulan',[BerandaTriwulanController::class, 'index']);
Route::get('/berandakinerja',[BerandaKinerjaController::class, 'index']);
Route::get('/berandappid',[BerandaPpidController::class, 'index']);



//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

Route::get('/home',[HomeController::class,'index'])->name('home')->middleware(['auth:sanctum','verified']);
Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard')->middleware(['auth:sanctum','verified']);
Route::resource('pegawai',PegawaiController::class);
Route::resource('kegiatan',KegiatanController::class);
Route::resource('informasi',InformasiController::class);
Route::resource('rencanastrategis',RencanaStrategisController::class);
Route::resource('tahunan',TahunanController::class);
Route::resource('semester',SemesterController::class);
Route::resource('triwulan',TriwulanController::class);
Route::resource('kinerja',KinerjaController::class);
Route::resource('PPID',PpidController::class);
Route::resource('pengaduan',PengaduanController::class);
Route::resource('contact',ContactController::class);