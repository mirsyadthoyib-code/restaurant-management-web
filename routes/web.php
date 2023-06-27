<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JualController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\JualMenuController;
use App\Http\Controllers\ProduksiController;
use App\Http\Controllers\BelanjaBahanController;
use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\ProduksiMenuController;
use App\Models\Produksi;
use GuzzleHttp\Handler\Proxy;

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
Route::post('/', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'usersession'], function () {
    // Dashboard
    Route::get('/dashboard', [DashboardsController::class, 'show'])->name('dashboard');

    // Main Sidebar
    Route::get('/shopping', [BelanjaController::class, 'show'])->name('shopping');;
    Route::get('/selling', [JualController::class, 'show']);
    Route::get('/production', [ProduksiController::class, 'show']);

    // Add Main 
        // In Modal
    Route::post('/shopping/add', [BelanjaController::class, 'store'])->name('shopping_add');
    Route::post('/selling/add', [JualController::class, 'store'])->name('selling_add');

    // Edit Main and List Detail
    Route::get('/shopping/edit/{id}', [BelanjaController::class, 'edit'])->name('shopping_edit');

    // Update Main
    Route::post('/shopping/update/{id}', [BelanjaController::class, 'update']);
    Route::post('/selling/update/{id}', [JualController::class, 'update']);

    // Add Detail
    Route::get('/shopping/detail/add/{id}', [BelanjaBahanController::class, 'create'])->name('shopping_detail_add');
    Route::get('/selling/detail/add/{id}', [JualMenuController::class, 'create'])->name('selling_detail_add');
    Route::get('/production/detail/add/{id}', [ProduksiMenuController::class, 'create'])->name('production_detail_add');
    
    // Save Detail Add
    Route::post('/shopping/detail/save/{id}', [BelanjaBahanController::class, 'store']);
    Route::post('/selling/detail/save/{id}', [JualMenuController::class, 'store']);
    Route::post('/production/detail/save/{id}', [ProduksiMenuController::class, 'store']);
    
    // Edit Detail
    Route::get('/shopping/detail/edit/{id}', [BelanjaBahanController::class, 'edit']);
    Route::get('/selling/detail/edit/{id}', [JualMenuController::class, 'edit']);
    Route::get('/production/detail/edit/{id}', [ProduksiMenuController::class, 'edit']);
    
    // Update Detail
    Route::post('/shopping/detail/update/{id}', [BelanjaBahanController::class, 'update']);
    Route::post('/selling/detail/update/{id}', [JualMenuController::class, 'update']);
    Route::post('/production/detail/update/{id}', [ProduksiMenuController::class, 'update']);
    
    // Delete Detail
    Route::delete('/shopping/detail/delete', [BelanjaBahanController::class, 'destroy']);
    Route::delete('/selling/detail/delete', [JualMenuController::class, 'destroy']);
    Route::delete('/production/detail/delete', [ProduksiMenuController::class, 'destroy']);
});