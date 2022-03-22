<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JoueurController;

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
// Joueur
Route::get('/back/joueurs', [JoueurController::class, 'index'])->name('joueur.index');
Route::get('/back/joueurs/create', [JoueurController::class, 'create'])->name('joueur.create');
Route::post('/back/joueurs/store', [JoueurController::class, 'store'])->name('joueur.store');
Route::get('/back/joueurs/{id}/read', [JoueurController::class, 'read'])->name('joueur.read');
Route::get('/back/joueurs/{id}/edit', [JoueurController::class, 'edit'])->name('joueur.edit');
Route::post('/back/joueurs/{id}/update', [JoueurController::class, 'update'])->name('joueur.update');
Route::post('/back/joueurs/{id}/delete', [JoueurController::class, 'destroy'])->name('joueur.destroy');
