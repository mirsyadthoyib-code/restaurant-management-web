<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JualController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\ProduksiController;

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
Route::get('/login', [UserController::class, 'index'])->name('login');;

// Dashboard
Route::post('/', [UserController::class, 'login']);
Route::get('/', function () {
    // check login
    if(!session('user')->nama_akun) {
        return redirect()->route('login');
    }
    return view('dashboard', [
        'title' => 'dashboard'
    ]);
});

// Main Sidebar
Route::get('/shopping', [BelanjaController::class, 'show']);
Route::get('/production', [ProduksiController::class, 'show']);
Route::get('/selling', [JualController::class, 'show']);

// Create page
Route::get('/shopping/add', [BelanjaController::class, 'create']);
Route::get('/production/add', [ProduksiController::class, 'create']);
Route::get('/selling/add', [JualController::class, 'create']);


