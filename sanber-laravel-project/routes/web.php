<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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
Route::get('/table', function(){
    return View('partial.table');
})->name('table');
Route::get('/data-table', function(){
    return View('partial.table_data');
})->name('data-table');
