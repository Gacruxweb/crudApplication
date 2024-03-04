<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create-info', [App\Http\Controllers\infoController::class, 'create_info'])->name('create.info');
Route::post('/create-info', [App\Http\Controllers\infoController::class, 'store_info'])->name('store.info');
Route::get('/info-list', [App\Http\Controllers\infoController::class, 'info_list'])->name('info.list');
Route::get('/information/{id}', [App\Http\Controllers\infoController::class, 'info_edit'])->name('info.edit');
Route::put('/information/{id}', [App\Http\Controllers\infoController::class, 'info_update'])->name('info.update');
Route::delete('/information/{id}', [App\Http\Controllers\infoController::class, 'info_delete'])->name('info.delete');

