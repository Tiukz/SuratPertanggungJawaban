<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotulaController;


Route::prefix('notulas')->group(function () {
    // Tampilkan form untuk input notula baru
    Route::get('/create', [NotulaController::class, 'create'])->name('notulas.create');

    // Simpan data notula baru
    Route::post('/', [NotulaController::class, 'store'])->name('notulas.store');

    // Tampilkan notula yang sudah disimpan (preview)
    Route::get('/{notula}', [NotulaController::class, 'show'])->name('notulas.show');

    Route::get('/{id}/pdf', [NotulaController::class, 'exportPDF'])->name('notulas.pdf');
});




