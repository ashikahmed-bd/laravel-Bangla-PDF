<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PdfController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/certificate', [CertificateController::class, 'show'])->name('certificate.show');
Route::get('/certificate/apply', [CertificateController::class, 'apply'])->name('certificate.apply');
Route::get('/certificate/{id}', [CertificateController::class, 'show'])->name('certificate.show');
Route::get('/download', [CertificateController::class, 'download'])->name('certificate.download');
