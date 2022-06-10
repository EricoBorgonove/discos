<?php

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

Route::get('discos', [App\Http\Controllers\DiscoController::class, 'index']);
Route::get('discos/create', [App\Http\Controllers\DiscoController::class, 'create']);
Route::post('discos', [App\Http\Controllers\DiscoController::class, 'store']); 
Route::get('discos/{disco}/edit', [App\Http\Controllers\DiscoController::class, 'edit']);
Route::put('discos/{disco}', [App\Http\Controllers\iscoController::class, 'update']);
Route::delete('discos/{disco}', [App\Http\Controllers\DiscoController::class, 'destroy']);

