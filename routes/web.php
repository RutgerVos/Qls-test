<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;


Route::get('/', [BaseController::class, 'index']);
Route::get('/pdf', [BaseController::class, 'pdf'])->name('pdf');
