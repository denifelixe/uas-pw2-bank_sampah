<?php

use App\Http\Controllers\BankSampahController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/', [BankSampahController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/bank-sampah/create', [BankSampahController::class, 'create'])->name('bank-sampah.create');
    Route::post('/bank-sampah', [BankSampahController::class, 'store'])->name('bank-sampah.store');
    Route::get('/bank-sampah/{bankSampah}/edit', [BankSampahController::class, 'edit'])->name('bank-sampah.edit');
    Route::patch('/bank-sampah/{bankSampah}', [BankSampahController::class, 'update'])->name('bank-sampah.update');
    Route::delete('/bank-sampah/{bankSampah}', [BankSampahController::class, 'destroy'])->name('bank-sampah.destroy');

    Route::get('/nasabah', [NasabahController::class, 'index'])->name('nasabah.index');
    Route::get('/nasabah/create', [NasabahController::class, 'create'])->name('nasabah.create');
    Route::post('/nasabah', [NasabahController::class, 'store'])->name('nasabah.store');
    Route::get('/nasabah/{nasabah}/edit', [NasabahController::class, 'edit'])->name('nasabah.edit');
    Route::patch('/nasabah/{nasabah}', [NasabahController::class, 'update'])->name('nasabah.update');
    Route::delete('/nasabah/{nasabah}', [NasabahController::class, 'destroy'])->name('nasabah.destroy');

    Route::get('/anggota-kelompok', function () {
        return view('anggota-kelompok');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
