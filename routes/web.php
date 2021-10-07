<?php

use App\Http\Controllers\AgamaController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\GrupWhatsappController;
use App\Http\Controllers\UnitController;
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

Route::get('/', function () {
    return view('admin.index');
});

// auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProses'])->name('login-proses');

// admin
Route::resource('/unit', UnitController::class);
Route::resource('/agama', AgamaController::class);
Route::resource('/grup-whatsapp', GrupWhatsappController::class);
