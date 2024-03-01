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
    return view('index');
});
Route::get('/main', function () {
    return view('layouts/main');
});



use App\Http\Controllers\MotorcycleArticleController;

Route::get('/articles/create', [MotorcycleArticleController::class, 'create'])->name('articles.create');
Route::post('/articles', [MotorcycleArticleController::class, 'store'])->name('articles.store');
Route::get('/articles', [MotorcycleArticleController::class, 'index'])->name('articles.index');
Route::get('/', [MotorcycleArticleController::class, 'index']);