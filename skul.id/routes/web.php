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
Route::get('/alumni', [PagesController::class, 'alumni'])->name('alumni');
Route::get('/alumni/sertifikasi', [PagesController::class, 'sertifikasi'])->name('sertifikasi');
Route::get('/alumni/loker', [PagesController::class, 'loker'])->name('loker');
Route::get('/alumni/pelatihan', [PagesController::class, 'pelatihan'])->name('pelatihan');
Route::get('/alumni/ikatan alumni', [PagesController::class, 'ikatanalumni'])->name('ikalumni');
Route::get('/alumni/kuliah', [PagesController::class, 'kuliah'])->name('kuliah');

Route::get('/mitra/login', [PagesController::class, 'login_mitra'])->name('loginmitra');
Route::get('/mitra/register', [PagesController::class, 'register_mitra'])->name('registermitra');
Route::get('/mitra', [PagesController::class, 'alumni'])->name('mitra');