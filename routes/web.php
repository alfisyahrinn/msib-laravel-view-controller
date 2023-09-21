<?php

use App\Http\Controllers\detailController;
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

Route::get('/', [detailController::class, 'home']);
Route::get('/biodata', [detailController::class, 'biodata']);
Route::get('/universitas', [detailController::class, 'universitas']);
