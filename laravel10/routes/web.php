<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KategoriController;
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

Route::controller(AuthController::class)->group(function () {
	Route::get('register', 'register')->name('register');
	Route::post('register', 'registerSimpan')->name('register.simpan');

	Route::get('login', 'login')->name('login');
	Route::post('login', 'loginAksi')->name('login.aksi');

	Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::get('/', function () {
	return view('welcome');
});

Route::middleware('auth')->group(function () {
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::controller(ProductController::class)->prefix('product')->group(function () {
		Route::get('', 'index')->name('product');
		Route::get('tambah', 'tambah')->name('product.tambah');
		Route::post('tambah', 'simpan')->name('product.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('product.edit');
		Route::post('edit/{id}', 'update')->name('product.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('product.hapus');
	});

	Route::controller(KategoriController::class)->prefix('kategori')->group(function () {
		Route::get('', 'index')->name('kategori');
		Route::get('tambah', 'tambah')->name('kategori.tambah');
		Route::post('tambah', 'simpan')->name('kategori.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('kategori.edit');
		Route::post('edit/{id}', 'update')->name('kategori.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('kategori.hapus');
	});
});
