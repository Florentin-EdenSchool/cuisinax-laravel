<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('search', [App\Http\Controllers\PlatController::class, 'index'])->name('index');

//Administrateur
Route::get('admin', [App\Http\Controllers\HomeController::class, 'adminIndex'])->name('admin')->middleware('admin');

Route::post('store', [App\Http\Controllers\PlatController::class, 'store'])->name('plat.store')->middleware('admin');
Route::post('storeOrigine', [App\Http\Controllers\PlatController::class, 'storeOrigine'])->name('plat.storeOrigine')->middleware('admin');
Route::post('storeIngredient', [App\Http\Controllers\PlatController::class, 'storeIngredient'])->name('plat.storeIngredient')->middleware('admin');
Route::post('storeTypePlat', [App\Http\Controllers\PlatController::class, 'storeTypePlat'])->name('plat.storeTypePlat')->middleware('admin');
Route::post('storeTypeNourriture', [App\Http\Controllers\PlatController::class, 'storeTypeNourriture'])->name('plat.storeTypeNourriture')->middleware('admin');