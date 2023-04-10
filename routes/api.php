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
    
    Route::get('/penjab', [AdminController::class, 'penjab']);
    Route::post('/tambah_penjab', [AdminController::class, 'tambah_penjab']);
    Route::put('/update_penjab/{id}', [AdminController::class, 'update_penjab']);
    Route::delete('/delete_penjab/{id}', [AdminController::class, 'delete_penjab']);
    Route::get('/get_penjab_by_id/{id}', [AdminController::class, 'get_penjabId']);
    
    Route::get('/posisi', [AdminController::class, 'posisi']);
    Route::post('/tambah_posisi', [AdminController::class, 'tambah_posisi']);
    Route::put('/update_posisi/{id}', [AdminController::class, 'update_posisi']);
    Route::delete('/delete_posisi/{id}', [AdminController::class, 'delete_posisi']);
    Route::get('/get_posisi_by_id/{id}', [AdminController::class, 'get_posisiId']);
    
    Route::get('/penggajian', [AdminController::class, 'penggajian']);
    Route::get('/karyawan', [AdminController::class, 'karyawan']);
    Route::post('/tambah_karyawan', [AdminController::class, 'tambah_karyawan']);
    Route::put('/update_karyawan/{id}', [AdminController::class, 'update_karyawan']);
    Route::delete('/delete_karyawan/{id}', [AdminController::class, 'delete_karyawan']);
    Route::get('/get_karyawan_by_id/{id}', [AdminController::class, 'get_karyawan_id']);
    
    Route::get('/role', [AdminController::class, 'role']);
    Route::post('/tambah_role', [AdminController::class, 'tambah_role']);
    Route::put('/update_role/{id}', [AdminController::class, 'update_role']);
    Route::delete('/delete_role/{id}', [AdminController::class, 'delete_role']);
    Route::get('/get_role_by_id/{id}', [AdminController::class, 'get_roleId']);
});
