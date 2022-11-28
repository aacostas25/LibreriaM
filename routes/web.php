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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::post('store',[ProovedorController::class,'store'])->name('proovedor.store');

Route::get('/proovedor', [App\Http\Controllers\ProovedorController::class, 'index'])->name('proovedor.listaproovedor');
//Route::resource('proovedor','App\Http\Controllers\ProovedorController');

Route::post('/store', [App\Http\Controllers\ProovedorController::class, 'store'])->name('proovedor.store');
//Route::resource('proovedor','App\Http\Controllers\ProovedorController');