<?php

use App\Http\Controllers\AgamaController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\GrupWhatsappController;
use App\Http\Controllers\JenisBiayaController;
use App\Http\Controllers\PembayaranController as ControllersPembayaranController;
use App\Http\Controllers\PersyaratanController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Siswa\BiodataAyahController;
use App\Http\Controllers\Siswa\BiodataController;
use App\Http\Controllers\Siswa\BiodataIbuController;
use App\Http\Controllers\Siswa\PembayaranController;
use App\Http\Controllers\Siswa\ProfilController;
use App\Http\Controllers\Siswa\ProsesPendaftaran;
use App\Http\Controllers\Siswa\SaudaraController;
use App\Http\Controllers\Siswa\WaliController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
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

Route::middleware('guest')->get('/', function () {
    return redirect()->route('login');
});

// auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/superadmin/login', [AuthController::class, 'loginSuperadmin'])->name('login-superadmin');
Route::post('/login', [AuthController::class, 'loginProses'])->name('login-proses');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerProses'])->name('register-proses');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'superadmin', 'middleware' => ['auth', 'superAdmin']],function () {
     // admin
     Route::get('/home', function () { return view('admin.index');});
     Route::resource('/unit', UnitController::class);
     Route::resource('/agama', AgamaController::class);
     Route::resource('/grup-whatsapp', GrupWhatsappController::class);
     Route::resource('/persyaratan', PersyaratanController::class);
     Route::resource('/jenis-biaya', JenisBiayaController::class);
     Route::resource('/user', UserController::class);
     Route::get('/setting', [SettingController::class, 'index'])->name('setting');
     
     // update no wa
     Route::post('/save-nowa-admin', [SettingController::class, 'saveWa'])->name('save-wa');
 
     // pembayaran
     Route::get('/list-pembayaran', [ControllersPembayaranController:: class, 'index'])->name('list-pembayaran');
     Route::get('/kofirmasi-lunas/{id}', [ControllersPembayaranController:: class, 'lunas'])->name('kofirmasi-lunas');
     Route::get('/kofirmasi-belum-lunas/{id}', [ControllersPembayaranController:: class, 'belumLunas'])->name('kofirmasi-belum-lunas');
 
     // santri
     Route::get('/list-calon-santri', [SantriController::class, 'index'])->name('santri.index');
     Route::get('/santri-show/{id}' , [SantriController::class, 'show'])->name('santri.show');
     Route::get('/santri/export/excel/{type}' , [SantriController::class, 'exportExcel'])->name('santri-export.excel');
     Route::get('/santri/export/pdf/{id}' , [SantriController::class, 'exportPdf'])->name('santri-export.pdf');
 
     // document
     Route::get('/list-user-dokumen', [DocumentController::class, 'index'])->name('list.dokumen');
     Route::get('/dokumen-lengkap/{id}', [DocumentController::class, 'store'])->name('dokumen.lengkap');

    //  akun
    Route::resource('/akun', AkunController::class);
});


// pendaftar
Route::group(['prefix' => 'pendaftar', 'middleware' => ['auth', 'pendaftar']],function () {
    Route::get('/home', function () { return view('siswa.index');});
    Route::get('/proses-pendaftaran', [ProsesPendaftaran::class, 'index'])->name('proses-pendaftaran');
    Route::post('/update-photo/profile', [ProfilController::class, 'updatePhoto'])->name('update-photo');
    Route::post('/pembayaran', [PembayaranController::class, 'bayar'])->name('pembayaran');
    
    Route::get('/summery-biodata', [BiodataController::class, 'index'])->name('all-biodata');

    // biodata diri
    Route::get('/create-biodata-diri', [BiodataController::class, 'createBiodataDiri'])->name('biodata-diri.create');
    Route::post('/store-biodata-diri', [BiodataController::class, 'storeBiodataDiri'])->name('biodata-diri.store');
    Route::get('/edit-biodata-diri', [BiodataController::class, 'editBiodataDiri'])->name('bioadta-diri.edit');
    Route::put('/update-biodata-diri/{id}', [BiodataController::class, 'updateBiodataDiri'])->name('biodata-diri.update');

    // biodata ayah
    Route::get('/create-biodata-ayah', [BiodataAyahController::class, 'create'])->name('ayah.create');
    Route::post('/store-biodata-ayah', [BiodataAyahController::class, 'store'])->name('ayah.store');
    Route::get('/edit-biodata-ayah', [BiodataAyahController::class, 'edit'])->name('ayah.edit');
    Route::put('/update-biodata-ayah/{id}', [BiodataAyahController::class, 'update'])->name('ayah.update');

    // biodata ibu
    Route::get('/create-biodata-ibu', [BiodataIbuController::class, 'create'])->name('ibu.create');
    Route::post('/store-biodata-ibu', [BiodataIbuController::class, 'store'])->name('ibu.store');
    Route::get('/edit-biodata-ibu', [BiodataIbuController::class, 'edit'])->name('ibu.edit');
    Route::put('/update-biodata-ibu/{id}', [BiodataIbuController::class, 'update'])->name('ibu.update');

    // wali
    Route::get('/create-wali', [WaliController::class, 'create'])->name('wali.create');
    Route::post('/store-wali', [WaliController::class, 'store'])->name('wali.store');
    Route::get('/edit-wali', [WaliController::class, 'edit'])->name('wali.edit');
    Route::put('/update-wali/{id}', [WaliController::class, 'update'])->name('wali.update');

    // saudara
    Route::get('/create-saudara', [SaudaraController::class, 'create'])->name('saudara.create');
    Route::post('/store-saudara', [SaudaraController::class, 'store'])->name('saudara.store');
    Route::get('/edit-saudara', [SaudaraController::class, 'edit'])->name('saudara.edit');
    Route::put('/update-saudara', [SaudaraController::class, 'update'])->name('saudara.update');

});
