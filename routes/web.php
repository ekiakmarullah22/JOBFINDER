<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobController;
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

