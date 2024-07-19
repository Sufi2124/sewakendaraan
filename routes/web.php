<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\KwitansiController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\SewaController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('admin/dashbord', [HomeController::class,'index'])->
    middleware(['auth','admin']);

Route::middleware('auth', 'user-access:admin')->name('admin.')->group(function () {
    Route::resource('/penyewa',\App\Http\Controllers\PenyewaController::class);
    Route::resource('/kendaraan',\App\Http\Controllers\KendaraanController::class);
    Route::resource('/kwitansi',\App\Http\Controllers\KwitansiController::class);
    Route::resource('/invoice',\App\Http\Controllers\InvoiceController::class);
    Route::resource('/sewa',\App\Http\Controllers\SewaController::class);
  Route::get('/admin', [HomeController::class, 'index'])->name('admin');

});

Route::resource('/penyewa',\App\Http\Controllers\PenyewaController::class);
    Route::resource('/kendaraan',\App\Http\Controllers\KendaraanController::class);
    Route::resource('/kwitansi',\App\Http\Controllers\KwitansiController::class);
    Route::resource('/invoice',\App\Http\Controllers\InvoiceController::class);
    Route::resource('/sewa',\App\Http\Controllers\SewaController::class);
    