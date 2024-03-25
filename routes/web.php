<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AirlineController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\TransactionController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware('role:super admin')->group(function () {
    // Airline
    Route::get('/tampil-maskapai', [AirlineController::class, 'index'])->name('tampil.maskapai');
    Route::get('/maskapai', [AirlineController::class, 'create'])->name('input.maskapai');
    Route::post('/maskapai-proses', [AirlineController::class, 'store'])->name('input.proses');
    Route::get('/edit/{id}', [AirlineController::class, 'edit'])->name('edit.maskapai');
    Route::post('/edit.proses/{id}', [AirlineController::class, 'update'])->name('edit.proses');
    Route::post('/hapus/{id}', [AirlineController::class, 'destroy'])->name('hapus');

    // Pegawai
    Route::get('/tampil-pegawai', [PegawaiController::class, 'index'])->name('tampil.pegawai');
    Route::get('/edit-pegawai/{id}', [PegawaiController::class, 'edit'])->name('edit.pegawai');
    Route::post('/edit-pegawai/proses/{id}', [PegawaiController::class, 'update'])->name('edit.pegawai.proses');
    Route::post('/hapus-pegawai/{id}', [PegawaiController::class, 'destroy'])->name('hapus.pegawai');

    // Customer
    Route::get('/tampil-customer', [CustomerController::class, 'index'])->name('tampil.customer');
    Route::get('/edit-customer/{id}', [CustomerController::class, 'edit'])->name('edit.customer');
    Route::post('/edit-customer/proses/{id}', [CustomerController::class, 'update'])->name('edit.customer.proses');
    Route::post('/hapus-customer/{id}', [CustomerController::class, 'destroy'])->name('hapus.customer');
});


Route::middleware('role:admin')->group(function () {
    Route::get('/tampil-penerbangan', [FlightController::class, 'index'])->name('tampil.penerbangan');
    Route::get('/input-penerbangan', [FlightController::class, 'create'])->name('input.penerbangan');
    Route::post('/input-penerbangan/proses', [FlightController::class, 'store'])->name('input.penerbangan.proses');
    Route::get('/edit-penerbangan/{id}', [FlightController::class, 'edit'])->name('edit.penerbangan');
    Route::post('/edit-penerbangan/{id}', [FlightController::class, 'update'])->name('edit.penerbangan.proses');
    Route::post('/hapus-penerbangan/{id}', [FlightController::class, 'destroy'])->name('hapus.penerbangan');
    Route::get('/konfirmasi-penerbangan', [TransactionController::class, 'edit'])->name('konfirmasi.penerbangan');
    Route::post('/konfirmasi-penerbangan/{id}', [TransactionController::class, 'update'])->name('konfirmasi.penerbangan.proses');
});


Route::middleware('role:user')->group(function () {
    Route::get('/tampil-tiket', [TransactionController::class, 'index'])->name('tampil.tiket');
    Route::get('/beli-tiket/{id}', [TransactionController::class, 'create'])->name('beli.tiket');
    Route::post('/beli-tiket/proses/{id}', [TransactionController::class, 'store'])->name('beli.tiket.proses');
    Route::get('/history-tiket', [TransactionController::class, 'show'])->name('history.tiket');
});
