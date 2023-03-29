<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);

    Route::get('/pengeluaran', [AdminController::class, 'pengeluaran']);
    Route::post('/tambah_pengeluaran', [AdminController::class, 'tambah_pengeluaran']);
    Route::put('/update_pengeluaran/{id}', [AdminController::class, 'update_pengeluaran']);
    Route::delete('/delete_pengeluaran/{id}', [AdminController::class, 'delete_pengeluaran']);
    Route::get('/get_pengeluaran_by_id/{id}', [AdminController::class, 'get_pengeluaran_by_id']);

    Route::get('/pemasukan', [AdminController::class, 'pemasukan']);
    Route::post('/tambah_pemasukan', [AdminController::class, 'tambah_pemasukan']);
    Route::put('/update_pemasukan/{id}', [AdminController::class, 'update_pemasukan']);
    Route::delete('/delete_pemasukan/{id}', [AdminController::class, 'delete_pemasukan']);
    Route::get('/get_pemasukan_by_id/{id}', [AdminController::class, 'get_pemasukan_by_id']);

    Route::get('/distributor', [AdminController::class, 'distributor']);
    Route::post('/tambah_distributor', [AdminController::class, 'tambah_distributor']);
    Route::put('/update_distributor/{id}', [AdminController::class, 'update_distributor']);
    Route::delete('/delete_distributor/{id}', [AdminController::class, 'delete_distributor']);
    Route::get('/get_distributor_by_id/{id}', [AdminController::class, 'get_distributor_by_id']);

});
