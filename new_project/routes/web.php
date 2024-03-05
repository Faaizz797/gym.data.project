<?php

use App\Http\Controllers\PersonController;
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

Route::get('/table', [PersonController::class,'index']);

Route::get('/input', [PersonController::class,'create']);

Route::post('/store', [PersonController::class,'store']);

Route::get('/{id}/edit', [PersonController::class,'edit']);

Route::put('/update/{id}', [PersonController::class,'update']);

Route::delete('/update/{id}', [PersonController::class,'destroy']);





