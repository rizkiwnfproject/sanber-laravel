<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CastController;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/welcome',  [AuthController::class, 'addRegister'])->name('welcome');
Route::get('/table', function () {
    return View('partial.table');
})->name('table');
Route::get('/data-table', function () {
    return View('partial.table_data');
})->name('data-table');

Route::get('/cast', [CastController::class, 'index'])->name('cast.index'); // Menampilkan daftar cast
Route::get('/cast/create', [CastController::class, 'create'])->name('cast.create'); // Menampilkan form tambah cast
Route::post('/cast', [CastController::class, 'store'])->name('cast.store'); // Menyimpan data cast baru
Route::get('/cast/{id}', [CastController::class, 'show'])->name('cast.show'); // Menampilkan detail cast
Route::get('/cast/{id}/edit', [CastController::class, 'edit'])->name('cast.edit'); // Menampilkan form edit cast
Route::put('/cast/{id}', [CastController::class, 'update'])->name('cast.update'); // Memperbarui data cast
Route::delete('/cast/{id}', [CastController::class, 'destroy'])->name('cast.destroy'); // Menghapus data cast