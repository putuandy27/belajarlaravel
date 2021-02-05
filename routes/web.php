<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

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

Route::get('/barang/{id}/detail/{detail}', function ($id, $detail) {
    return 'Ini adalah id '.$id . ' dengan detail '.$detail;
});

Route::prefix('test')->group(function (){

    Route::prefix('test2')->group(function(){

    Route::get('/hai', function(){
        return 'user';
    });
});
});

Route::get('/hello', [HelloController::class, 'getNama']);
Route::get('/hello/{id}', [HelloController::class, 'getId']);
Route::get('/helloo/{id}', [HelloController::class, 'returnView']);
Route::get('/hello/{id}/nama/{nama}', [HelloController::class, 'getDetail']);
