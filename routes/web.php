<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\KategoryController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\AboutController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// BUAT ROUTE UNTUK MENGARAHKAN KE HALAMAN DEPAN WEBSITE
Route::get('/', [FrontEndController::class, 'index']);
// BUAT ROUTE UNTUK MENGARAHKAN KE HALAMAN ADMIN
Route::get('/admin', [DashboardController::class, 'index'])->middleware('auth');
// BUAT ROUTE UNTUK MENGARAHKAN KE HALAMAN DASHBOARD/JOB/INDEX
Route::get('/admin/job', [JobController::class, 'index'])->middleware('admin');
// BUAT ROUTE UNTUK MENGARAHKAN KE HALAMAN CREATE JOB
Route::get('/admin/job/create', [JobController::class, 'create'])->middleware('admin');
// BUAT ROUTE UNTUK MEMASUKKAN DATA KE TABEL PEKERJAAN
Route::post('/admin/job/store', [JobController::class, 'store'])->middleware('admin');
// BUAT ROUTE UNTUK NAMPILIN DETAIL JOB
Route::get('/job/{id}', [JobController::class, 'show']);
// BUAT ROUTE UNTUK JOB LISTING
Route::get('/cari', [FrontEndController::class, 'searchJob']);
// BUAT ROUTE UNTUK CARI PEKERJAAN
Route::get('/job_listing', [FrontEndController::class, 'jobListing']);
// BUAT ROUTE UNTUK MENAMPILKAN JOB BERDASARKAN KATEGORI
Route::get('/kategori/{id}', [FrontEndController::class, 'jobByKategori']);
// BUAT ROUTE UNTUK MENAMPILKAN JOB BERDASARKAN LOKASI
Route::get('/lokasi/{id}', [FrontEndController::class, 'jobByLokasi']);
// BUAT ROUTE UNTUK MENGARAHKAN KE FORM EDIT JOB
Route::get('/admin/job/{id}', [JobController::class, 'edit'])->middleware('admin');
// BUAT ROUTE UNTUK MENYIMPAN DATA TERBARU PEKERJAAN
Route::PUT('/admin/job/update/{id}', [JobController::class, 'update'])->middleware('admin');
// BUAT ROUTE UNTUK CARI DATA PEKERJAAN
Route::get('/admin/job/{id}', [JobController::class, 'edit'])->middleware('admin');
// BUAT ROUTE UNTUK ADMIN KATEGORI
Route::get('/admin/kategori', [KategoryController::class, 'index'])->middleware('admin');
// BUAT ROUTE UNTUK MENGARAHKAN KE HALAMAN CREATE KATEGORI
Route::get('/admin/kategori/create', [KategoryController::class, 'create'])->middleware('admin');
// BUAT ROUTE UNTUK POST DATA KATEGORI
Route::post('/admin/kategori/store', [KategoryController::class, 'store'])->middleware('admin');
Route::get('/admin/kategori/{id}', [KategoryController::class, 'edit'])->middleware('admin');;
Route::PUT('/admin/kategori/update/{id}', [KategoryController::class, 'update'])->middleware('admin');;
Route::DELETE('/admin/kategori/delete/{id}', [KategoryController::class, 'destroy'])->middleware('admin');;

// Route untuk lokasi
Route::get('/admin/lokasi', [LokasiController::class, 'index'])->middleware('admin');;
Route::get('/admin/lokasi/create', [LokasiController::class, 'create'])->middleware('admin');;
Route::post('/admin/lokasi/store', [LokasiController::class, 'store'])->middleware('admin');;
Route::get('/admin/lokasi/{id}', [LokasiController::class, 'edit'])->middleware('admin');;
Route::PUT('/admin/lokasi/update/{id}', [LokasiController::class, 'update'])->middleware('admin');;
Route::DELETE('/admin/lokasi/delete/{id}', [LokasiController::class, 'destroy'])->middleware('admin');;

// Route untuk About
Route::get('/tentang', [AboutController::class, 'index']);
Route::get('/admin/about', [AboutController::class, 'create'])->middleware('admin');;
Route::post('/admin/about/store', [AboutController::class, 'store'])->middleware('admin');;



Auth::routes();
