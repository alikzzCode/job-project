<?php

use App\Http\Controllers\FileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::prefix('/v1')->group(function () {
    Route::get('file', [FileController::class, 'index'])->name('file.index');
    Route::post('file', [FileController::class, 'store'])->name('file.store');
    Route::get('edit', [FileController::class, 'edit'])->name('file.edit');
    Route::put('update', [FileController::class, 'update'])->name('file.update');
    Route::get('delete', [FileController::class, 'show'])->name('file.show');
    Route::post('delete', [FileController::class, 'delete'])->name('file.delete');


});
