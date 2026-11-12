<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;

Route::get('/', [LaptopController::class, 'index']);
Route::get('/create-laptop' , [LaptopController::class, 'create']);
Route::post('/save-laptop' , [LaptopController::class, 'store'])->name('save-laptop');
Route::post('/delete-laptop/{laptop}', [LaptopController::class, 'destroy'])->name('delete-laptop');
Route::get('/edit-laptop/{laptop}', [LaptopController::class, 'edit'])->name('edit-laptop');
Route::post('/update-laptop/{laptop}', [LaptopController::class, 'update'])->name('update-laptop');