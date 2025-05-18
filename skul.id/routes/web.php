<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/alumni/login', [PagesController::class, 'login_alumni'])->name('loginalumni');
Route::get('/alumni/register', [PagesController::class, 'register_alumni'])->name('registeralumni');
Route::get('/alumni', [PagesController::class, 'alumni'])->name('beranda_alumni');
Route::get('/alumni/sertifikasi', [PagesController::class, 'sertifikasi'])->name('sertifikasi_alumni');
Route::get('/alumni/loker', [PagesController::class, 'loker'])->name('loker_alumni');
Route::get('/alumni/pelatihan', [PagesController::class, 'pelatihan'])->name('pelatihan_alumni');
Route::get('/alumni/ikatan alumni', [PagesController::class, 'ikatanalumni'])->name('ikalumni');
Route::get('/alumni/kuliah', [PagesController::class, 'kuliah'])->name('kuliah');
Route::get('/alumni/ikatan alumni', [PagesController::class, 'ikatanalumni'])->name('ikalumni');
Route::get('/alumni/profile', [PagesController::class, 'profile_alumni'])->name('profile_alumni');
Route::get('/alumni/profile/edit', [PagesController::class, 'edit_profile_alumni'])->name('edit_profile_alumni');
Route::get('/alumni/artikel', [PagesController::class, 'artikel_alumni'])->name('artikel_alumni');
Route::get('/alumni/ebook', [PagesController::class, 'ebook_alumni'])->name('ebook_alumni');
Route::get('/alumni/jelajah', [PagesController::class, 'jelajah_alumni'])->name('jelajah_alumni');

Route::get('/mitra/login', [PagesController::class, 'login_mitra'])->name('loginmitra');
Route::get('/mitra/register', [PagesController::class, 'register_mitra'])->name('registermitra');
Route::get('/mitra', [PagesController::class, 'mitra'])->name('mitra');
Route::get('/mitra/sertifikasi', [PagesController::class, 'sertifikasi_mitra'])->name('sertifikasi_mitra');
Route::get('/mitra/loker', [PagesController::class, 'loker_mitra'])->name('loker_mitra');
Route::get('/mitra/pelatihan', [PagesController::class, 'pelatihan_mitra'])->name('pelatihan_mitra');
Route::get('/mitra/data/user', [PagesController::class, 'data_user_mitra'])->name('data_user_mitra');

Route::get('/siswa/login', [PagesController::class, 'login_siswa'])->name('loginsiswa');