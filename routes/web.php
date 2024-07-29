<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [BaseController::class, 'index']);
