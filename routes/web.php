<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MagesortController;
use App\Http\Controllers\JoueurController;
use App\Models\Joueur;
use App\Models\Magesort;

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
    $joueurs = Joueur::all();
    return view('front/pages/home', compact('joueurs'));
})->name('home');

Route::get('/grimoireMagicien', function () {
    $magicienSorts = Magesort::all();
    return view('front/pages/grimoireMagicien', compact('magicienSorts'));
})->name('grimoireMagicien');


// Joueur
Route::get('/back/joueurs', [JoueurController::class, 'index'])->name('joueur.index');
Route::get('/back/joueurs/create', [JoueurController::class, 'create'])->name('joueur.create');
Route::post('/back/joueurs/store', [JoueurController::class, 'store'])->name('joueur.store');
Route::get('/back/joueurs/{id}/read', [JoueurController::class, 'read'])->name('joueur.read');
Route::get('/back/joueurs/{id}/edit', [JoueurController::class, 'edit'])->name('joueur.edit');
Route::post('/back/joueurs/{id}/update', [JoueurController::class, 'update'])->name('joueur.update');
Route::post('/back/joueurs/{id}/delete', [JoueurController::class, 'destroy'])->name('joueur.destroy');
// Magesort
Route::get('/back/magesorts', [MagesortController::class, 'index'])->name('magesort.index');
Route::get('/back/magesorts/create', [MagesortController::class, 'create'])->name('magesort.create');
Route::post('/back/magesorts/store', [MagesortController::class, 'store'])->name('magesort.store');
Route::get('/back/magesorts/{id}/read', [MagesortController::class, 'read'])->name('magesort.read');
Route::get('/back/magesorts/{id}/edit', [MagesortController::class, 'edit'])->name('magesort.edit');
Route::post('/back/magesorts/{id}/update', [MagesortController::class, 'update'])->name('magesort.update');
Route::post('/back/magesorts/{id}/delete', [MagesortController::class, 'destroy'])->name('magesort.destroy');
