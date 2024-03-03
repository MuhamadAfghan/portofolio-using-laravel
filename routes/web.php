<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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


Route::get('/', [BlogController::class, 'home']);
Route::get('education', [BlogController::class, 'education']);
Route::get('portofolio', [BlogController::class, 'portofolio']);
Route::get('contact', [BlogController::class, 'contact']);