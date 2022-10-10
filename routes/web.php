<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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


Route::get('/index', [AdminController::class, 'index']);
Route::get('/', [AdminController::class, 'index']);

// Route::get('/home', 'AdminController@home');
Route::get('/images/{id}', [AdminController::class, 'images'])->name('image');
Route::get('/create', [AdminController::class, 'create']);
Route::post('/create', [AdminController::class, 'store']);
Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [AdminController::class, 'update'])->name('update');
Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('delete');