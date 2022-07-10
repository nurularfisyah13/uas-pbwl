<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/supplier', [App\Http\Controllers\SupplierController::class, 'index'])->name('supplier')->middleware('auth');
Route::get('/supplier/create', [App\Http\Controllers\SupplierController::class, 'create'])->name('supplier')->middleware('auth');
Route::post('/supplier/store', [App\Http\Controllers\SupplierController::class, 'store'])->name('supplier')->middleware('auth');
Route::get('/supplier/edit/{id}', [App\Http\Controllers\SupplierController::class, 'edit'])->name('supplier')->middleware('auth');
Route::post('/supplier/update/{id}', [App\Http\Controllers\SupplierController::class, 'update'])->name('supplier')->middleware('auth');
Route::get('/supplier/destroy/{id}', [App\Http\Controllers\SupplierController::class, 'destroy'])->name('supplier')->middleware('auth');

Route::get('/barang', [App\Http\Controllers\BarangController::class, 'index'])->name('barang')->middleware('auth');
Route::get('/barang/create', [App\Http\Controllers\BarangController::class, 'create'])->name('barang')->middleware('auth');
Route::post('/barang/store', [App\Http\Controllers\BarangController::class, 'store'])->name('barang')->middleware('auth');
Route::get('/barang/edit/{id}', [App\Http\Controllers\BarangController::class, 'edit'])->name('barang')->middleware('auth');
Route::post('/barang/update/{id}', [App\Http\Controllers\BarangController::class, 'update'])->name('barang')->middleware('auth');
Route::get('/barang/delete/{id}', [App\Http\Controllers\BarangController::class, 'destroy'])->name('barang')->middleware('auth');

Route::get('/pembeli', [App\Http\Controllers\PembeliController::class, 'index'])->name('pembeli')->middleware('auth');
Route::get('/pembeli/create', [App\Http\Controllers\PembeliController::class, 'create'])->name('pembeli')->middleware('auth');
Route::post('/pembeli/store', [App\Http\Controllers\PembeliController::class, 'store'])->name('pembeli')->middleware('auth');
Route::get('/pembeli/edit/{id}', [App\Http\Controllers\PembeliController::class, 'edit'])->name('pembeli')->middleware('auth');
Route::post('/pembeli/update/{id}', [App\Http\Controllers\PembeliController::class, 'update'])->name('pembeli')->middleware('auth');
Route::get('/pembeli/delete/{id}', [App\Http\Controllers\PembeliController::class, 'destroy'])->name('pembeli')->middleware('auth');

Route::get('/transaksi', [App\Http\Controllers\TransaksiController::class, 'index'])->name('transaksi')->middleware('auth');
Route::get('/transaksi/create', [App\Http\Controllers\TransaksiController::class, 'create'])->name('transaksi')->middleware('auth');
Route::post('/transaksi/store', [App\Http\Controllers\TransaksiController::class, 'store'])->name('transaksi')->middleware('auth');
Route::get('/transaksi/update/{id}', [App\Http\Controllers\TransaksiController::class, 'update'])->name('transaksi')->middleware('auth');
Route::get('/transaksi/delete/{id}', [App\Http\Controllers\TransaksiController::class, 'destroy'])->name('transaksi')->middleware('auth');
