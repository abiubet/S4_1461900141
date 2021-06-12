<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokterController;


Route::get('/', [DokterController::class, 'index']);
Route::post("dokter-import", [DokterController::class, 'import'])->name("dokter.import");
