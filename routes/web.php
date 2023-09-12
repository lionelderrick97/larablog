<?php

use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'postslist'])-> name('home');

Route::get('/create', [PostController::class, 'createpost'])->name('create');

Route::post('/', [PostController::class, 'storepost'])->name('store');

Route::get('/afficher/{id}', [PostController::class, 'show'])->name('postshow');

Route::get('/edit/{id}', [PostController::class, 'edit'])->name('editpost');

Route::put('/update/{id}', [PostController::class, 'update'])->name('updatepost');

Route::delete('/{id}', [PostController::class, 'destroy'])->name('suppression');

