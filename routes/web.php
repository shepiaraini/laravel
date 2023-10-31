<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\NotarisController;
use App\Http\Controllers\AlamatController;
use App\Http\Controllers\MpdnBatolaController;
use App\Http\Controllers\MpdnBjmController;
use App\Http\Controllers\WilayahController;
use App\Http\Controllers\MpdnjbController;
use App\Http\Controllers\ProtesController;
use App\Http\Controllers\WasiatController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\NopenggantiController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\AktaController;
use App\Http\Controllers\PraktikController;


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

//alamat kantor 
//Route::get('/alamat',[PenggunaController::class,'tampilHalamanalamat']);


//Route::get('/mpdnbatola',[PenggunaController::class,'tampilHalamanMpdnBatola']);
//Route::get('/mpdnbanjarmasin',[PenggunaController::class,'tampilHalamanMpdnBanjarmasin']);
//Route::get('/mpdnbanjarbaru',[PenggunaController::class,'tampilHalamanMpdnBanjarbaru']);
//Route::get('/protes',[PenggunaController::class,'tampilHalamanProtes']);
//Route::get('/wasiat',[PenggunaController::class,'tampilHalamanWasiat']);
//Route::get('/lapnotaris',[PenggunaController::class,'tampilHalamanLaporanNotaris']);

 
//biodata

//Route::get('/notaris', function (){
//wilayah


Route::get('/',[LoginController::class,'login'])->name('login');
Route::post('/post-login',[LoginController::class,'postlogin'])->name('post-login');

//Route::get('#',[LoginController::class,'tampilHalamanLogin']);
Route::get('/register',[LoginController::class,'Registrasi']);
Route::post('/simpan-register',[LoginController::class,'simpanregistrasi']);

Route::get('/logout',[LoginController::class,'logout']);

Route::group(['middleware' => ['auth','ceklevel:admin']], function () {
    
//Biodata Notaris
Route::get('/Notaris',[NotarisController::class,'tampilHalamanBiodata']);
Route::get('/Tambah_Notaris',[NotarisController::class,'tampilHalamanTambahBiodata']);
Route::post('/Simpan_Notaris',[NotarisController::class,'SimpanNotaris']);
Route::get('/edit-notaris/{id}',[NotarisController::class,'EditNotaris']);
Route::post('/update-notaris/{id}',[NotarisController::class,'UpdateNotaris']);
Route::get('/delete-notaris/{id}',[NotarisController::class,'DeleteNotaris']);


///Notaris Penggantiph

//wilayah
Route::get('/wilayah',[WilayahController::class,'tampilHalamanWilayah']);
Route::get('/Tambah_Wilayah',[WilayahController::class,'tampilHalamanTambahWilayah']);
Route::post('/Simpan_Wilayah',[WilayahController::class,'SimpanWilayah']);
Route::get('/edit-wilayah/{id}',[WilayahController::class,'EditWilayah']);
Route::post('/update-wilayah/{id}',[WilayahController::class,'UpdateWilayah']);
Route::get('/delete-wilayah/{id}',[WilayahController::class,'DeleteWilayah']);




});


Route::group(['middleware' => ['auth','ceklevel:admin,notaris']], function () {

/////validasi protes
    Route::get('/validasi/{id}',[ProtesController::class,'Validasi']);
    Route::get('/validasiNO/{id}',[ProtesController::class,'validasiNO']);
    
//////validasi lap akta
Route::get('/validasiAkta/{id}',[LaporanController::class,'validasiLaporan']);
Route::get('/validasiNOAkta/{id}',[LaporanController::class,'validasiNOAkta']);

////////validasi pengajuan
Route::get('/validasiPengajuan/{id}',[PengajuanController::class,'validasiPengajuan']);


    Route::get('/home',[PenggunaController::class,'tampilHalamanHome']);

    Route::get('/notpengganti',[NopenggantiController::class,'tampilHalamanNotarisPengganti']);
    Route::get('/Tambah_Notpengganti',[NopenggantiController::class,'tampilHalamanTambahNotPengganti']);
    Route::post('/Simpan_Notpengganti',[NopenggantiController::class,'Simpan_Notpengganti']);
    Route::get('/edit-notpengganti/{id}',[NopenggantiController::class,'EditNotarisPengganti']);
    Route::post('/update-notpengganti/{id}',[NopenggantiController::class,'UpdateNotarisPengganti']);
    Route::get('/delete-notpengganti/{id}',[NopenggantiController::class,'DeleteNotarisPengganti']);
    

Route::get('/lapnotaris',[LaporanController::class,'tampilHalamanLaporanNotaris']);
Route::get('/Tambah_Laporan',[LaporanController::class,'tampilHalamanInputNotaris']);
Route::post('/Simpan_Laporan',[LaporanController::class,'SimpanLaporan']);
Route::get('/edit-laporan/{id}',[LaporanController::class,'EditLaporan']);
Route::post('/update-laporan/{id}',[LaporanController::class,'UpdateLaporan']);
Route::get('/delete-laporan/{id}',[LaporanController::class,'DeleteLaporan']);

Route::get('/lapnotaris1',[LaporanController::class,'tampilHalamanLaporanStatus']);



///////////////////////////////////
 Route::get('/akta',[AktaController::class,'tampilHalamanAkta']);
 Route::get('/Tambah-Akta',[AktaController::class,'tampilHalamanTambahAkta']);
 Route::post('/Simpan_Akta',[AktaController::class,'SimpanAkta']);
 Route::get('/delete-akta/{id}',[AktaController::class,'DeleteAkta']);

 /////////////////////////////////////////////
 Route::get('/Praktik',[PraktikController::class,'tampilHalamanPraktik']);
 Route::get('/Tambah-Praktik',[PraktikController::class,'tampilHalamanTambahPraktik']);
 Route::post('/Simpan_praktik',[PraktikController::class,'SimpanPraktik']);


//Protes=========================================================================
Route::get('/protes',[ProtesController::class,'tampilHalamanProtes']);
Route::get('/Tambah_Protes',[ProtesController::class,'tampilHalamanInputProtes']);
Route::post('/Simpan_Protes',[ProtesController::class,'SimpanProtes']);
Route::get('/edit-protes/{id}',[ProtesController::class,'EditProtes']);
Route::post('/update-protes/{id}',[ProtesController::class,'UpdateProtes']);
Route::get('/delete-protes/{id}',[ProtesController::class,'DeleteProtes']);

Route::get('/protes1',[ProtesController::class,'tampilHalamanProtesUser']);

Route::get('/cetak-protes',[ProtesController::class,'CetakProtes'])->name('cetak-protes');


///Pengajuan Jadwal Pelantikan
Route::get('/pengajuan',[PengajuanController::class,'tampilHalamanPengajuan']);
Route::get('/Tambah_Pengajuan',[PengajuanController::class,'tampilHalamanTambahPengajuan']);
Route::post('/Simpan_Pengajuan',[PengajuanController::class,'SimpanPengajuan']);
Route::get('/edit-pengajuan/{id}',[PengajuanController::class,'EditPengajuan']);
Route::post('/update-pengajuan/{id}',[PengajuanController::class,'UpdatePengajuan']);
Route::get('/delete-pengajuan/{id}',[PengajuanController::class,'DeletePengajuan']);


Route::get('/pengajuan1',[PengajuanController::class,'tampilHalamanStatusPengajuan']);
//////////////////////////Pelantikkan

Route::get('/pelantikkan',[PenggunaController::class,'tampilHalamanPelantikkan']);
Route::get('/Tambah-Pelantikkan',[PenggunaController::class,'tampilHalamanTambahPelantikkan']);
Route::post('/Simpan_Pelantikkan',[PenggunaController::class,'SimpanPelantikkan']);
Route::get('/edit-pelantikkan/{id}',[PenggunaController::class,'EditPelantikkan']);
Route::post('/update-pelantikkan/{id}',[PenggunaController::class,'UpdatePelantikkan']);
Route::get('/delete-pelantikkan/{id}',[PenggunaController::class,'DeletePelantikkan']);

Route::get('/Pelantikkan1',[PenggunaController::class,'tampilHalamanPelantikkanUser']);    
});
