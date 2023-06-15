<?php

use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\JualController;
use App\Http\Controllers\ProduksiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard', [
        'title' => 'dashboard'
    ]);
});

Route::get('/shopping', [BelanjaController::class, 'show']);

Route::get('/production', [ProduksiController::class, 'show']);

Route::get('/selling', [JualController::class, 'show']);
