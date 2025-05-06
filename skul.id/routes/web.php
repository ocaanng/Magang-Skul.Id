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

Route::get('/login', [PagesController::class, 'login'])->name('login');
Route::get('/alumni', [PagesController::class, 'alumni'])->name('alumni');
Route::get('/alumni/sertifikasi', [PagesController::class, 'sertifikasi'])->name('sertifikasi');
Route::get('/alumni/loker', [PagesController::class, 'loker'])->name('loker');
Route::get('/alumni/pelatihan', [PagesController::class, 'pelatihan'])->name('pelatihan');
Route::get('/alumni/ikatan alumni', [PagesController::class, 'ikatanalumni'])->name('ikalumni');
Route::get('/alumni/kuliah', [PagesController::class, 'kuliah'])->name('kuliah');

Route::get('/jobs', function (Request $request) {
    $jobs = collect([
        ['title' => 'Frontend Developer', 'location' => 'Indonesia', 'type' => 'Full Time', 'mode' => 'Remote'],
        ['title' => 'UI/UX Designer', 'location' => 'USA', 'type' => 'Part Time', 'mode' => 'Onsite'],
        ['title' => 'Mobile App Developer', 'location' => 'Germany', 'type' => 'Project', 'mode' => 'Remote'],
        ['title' => 'Backend Engineer', 'location' => 'Indonesia', 'type' => 'Full Time', 'mode' => 'Onsite'],
    ]);

    $filtered = $jobs->filter(function ($job) use ($request) {
        return (!$request->location || $job['location'] === $request->location) &&
               (!$request->type || $job['type'] === $request->type);
    });

    return view('jobs', [
        'jobs' => $filtered,
        'filters' => $request->only(['location', 'type']),
    ]);
});