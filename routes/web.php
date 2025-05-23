<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KajurController;

Route::get('/dashboard', function () {
    $Dosen = 1000;
    $jumlahMahasiswa = 10000;
    $jumlahKajur = 50; // Tambahkan ini (atau ambil dari database)

    return view('Dashboard.index', compact('Kajur', 'jumlahMahasiswa', 'jumlahKajur'));
});

Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::get('/mahasiswa/{npm}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswa/{npm}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('/mahasiswa/{npm}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');

Route::resource('kajur', MatkulController::class);
Route::get('/kajur', [KajurController::class, 'index'])->name('kajur.index');
Route::get('/kajur/create', [KajurController::class, 'create'])->name('kajur.create');
Route::post('/kajur', [KajurController::class, 'store'])->name('kajur.store');
Route::get('/kajur/{nama_kajur}/edit', [KajurController::class, 'edit'])->name('kajur.edit');
Route::put('/kajur/{nama_kajur}', [KajurController::class, 'update'])->name('kajur.update');
Route::delete('/kajur/{nama_kajur}', [KajurController::class, 'destroy'])->name('kajur.destroy');