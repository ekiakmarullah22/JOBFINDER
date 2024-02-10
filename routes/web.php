<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\KategoryController;
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
Route::get('/admin', [DashboardController::class, 'index']);
// BUAT ROUTE UNTUK MENGARAHKAN KE HALAMAN DASHBOARD/JOB/INDEX
Route::get('/admin/job', [JobController::class, 'index']);
// BUAT ROUTE UNTUK MENGARAHKAN KE HALAMAN CREATE JOB
Route::get('/admin/job/create', [JobController::class, 'create']);
// BUAT ROUTE UNTUK MEMASUKKAN DATA KE TABEL PEKERJAAN
Route::post('/admin/job/store', [JobController::class, 'store']);
// BUAT ROUTE UNTUK NAMPILIN DETAIL JOB
Route::get('/job/{id}', [JobController::class, 'show']);
// BUAT ROUTE UNTUK JOB LISTING
Route::get('/job_listing', [FrontEndController::class, 'jobListing']);
// BUAT ROUTE UNTUK MENAMPILKAN JOB BERDASARKAN KATEGORI
Route::get('/kategori/{id}', [FrontEndController::class, 'jobByKategori']);
// BUAT ROUTE UNTUK MENAMPILKAN JOB BERDASARKAN LOKASI
Route::get('/lokasi/{id}', [FrontEndController::class, 'jobByLokasi']);
// BUAT ROUTE UNTUK MENGARAHKAN KE FORM EDIT JOB
Route::get('/admin/job/{id}', [JobController::class, 'edit']);
// BUAT ROUTE UNTUK MENYIMPAN DATA TERBARU PEKERJAAN
Route::PUT('/admin/job/update/{id}', [JobController::class, 'update']);
// BUAT ROUTE UNTUK MENGHAPUS DATA JOB
Route::DELETE('/admin/job/delete/{id}', [JobController::class, 'destroy']);
// BUAT ROUTE UNTUK ADMIN KATEGORI
Route::get('/admin/kategori', [KategoryController::class, 'index']);
// BUAT ROUTE UNTUK MENGARAHKAN KE HALAMAN CREATE KATEGORI
Route::get('/admin/kategori/create', [KategoryController::class, 'create']);
// BUAT ROUTE UNTUK POST DATA KATEGORI
Route::post('/admin/kategori/store', [KategoryController::class, 'store']);
Route::get('/admin/kategori/{id}', [KategoryController::class, 'edit']);
Route::PUT('/admin/kategori/update/{id}', [KategoryController::class, 'update']);
Route::DELETE('/admin/kategori/delete/{id}', [KategoryController::class, 'destroy']);


Auth::routes();
