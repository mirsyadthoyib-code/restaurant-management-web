<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JualController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\ProduksiController;
use App\Http\Controllers\BelanjaBahanController;

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

// Authentication Page
Route::get('/', [UserController::class, 'index'])->name('login');
Route::post('/dashboard', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'usersession'], function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard', [
            'title' => 'dashboard'
        ]);
    });

    // Main Sidebar
    Route::get('/shopping', [BelanjaController::class, 'show'])->name('shopping');;
    Route::get('/production', [ProduksiController::class, 'show']);
    Route::get('/selling', [JualController::class, 'show']);

    // Add Main 
    Route::post('/shopping/add', [BelanjaController::class, 'create'])->name('shopping_add');
    Route::get('/production/add', [ProduksiController::class, 'create'])->name('production');
    Route::get('/selling/add', [JualController::class, 'create'])->name('selling');

    // Edit Main and List Detail
    Route::get('/shopping/edit', [BelanjaController::class, 'edit'])->name('shopping_edit');

    // Add & Edit Detail
    Route::get('/shopping/detail', [BelanjaBahanController::class, 'create'])->name('shopping_detail_edit');

    // Save api
    Route::post('/shopping/save', [BelanjaController::class, 'store']);
    Route::post('/production/save', [ProduksiController::class, 'store']);
    Route::post('/selling/save', [JualController::class, 'store']);
});