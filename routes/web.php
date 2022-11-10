<?php

use App\Http\Controllers\PersonneController;
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
    return view('home');
});

Route::get('/', [PersonneController::class,'personnes'])->name('personnes');

Route::get('/edit/{id}', [PersonneController::class,'edit'])->name('edit');

Route::get('/show/{id}', [PersonneController::class,'show'])->name('show');

Route::delete('/delete/{id}', [PersonneController::class,'delete'])->name('delete');


Route::post('/update/{id}', [PersonneController::class,'update'])->name('update');
Route::delete('/deleteAll', [PersonneController::class,'deleteAll'])->name('deleteAll');
