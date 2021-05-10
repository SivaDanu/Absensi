<?php

use App\Http\Controllers\AbsensiController;
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

Route::get('', function () {
    return view('welcome');
});


Route::get('/try', function () {
    return view('try');
});


Route::get('/hai', function () {
    return "Hi, How Are You, Iam Under The Water, Please Help Me, blublublbub...";
});


//Tampilkan Tabel Absensi
Route::get('/', [AbsensiController::class, 'index']);

//Tampilkan Form Isi Absensi
Route::get('/kendali/tambahAbsensi', [AbsensiController::class, 'tambahAbsensi']);

//Simpan Absensi
Route::get('/kendali/simpanAbsensi', [AbsensiController::class, 'simpanAbsensi']);

//Hapus Absensi
Route::get('/kendali/hapus/{id}', [AbsensiController::class, 'hapusAbsensi']);

//Edit Absensi
Route::get('/kendali/editAbsensi/{id}', [AbsensiController::class, 'editAbsensi']);

//Simpan Hasil Edit
Route::get('/kendali/updateAbsensi', [AbsensiController::class, 'updateAbsensi']);
