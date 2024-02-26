<?php

use Illuminate\Support\Facades\Route;

//importazione controller Movie
use App\Http\Controllers\Guest\MovieController;

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


Route::get('/', [MovieController::class,'index'])->name('movie.index');

