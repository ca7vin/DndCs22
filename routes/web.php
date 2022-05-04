<?php

use App\Http\Controllers\GrimoireController;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\BackgroundController;
use App\Http\Controllers\FicheController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PnjController;
use App\Http\Controllers\MagesortController;
use App\Http\Controllers\JoueurController;
use App\Http\Controllers\MonstreController;
use App\Models\Background;
use App\Models\Fiche;
use App\Models\Joueur;
use App\Models\Magesort;
use App\Models\Pnj;

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
// make a route for spell.blade.php
Route::get('/fichepj-edit', function () {
    return view('front/pages/fichepj-edit');
})->name('fichepj-edit');

Route::get('/fichepj', function () {
    // $backgrounds = Background::all();
    return view('front/pages/fichepj');
})->name('fichepj');

Route::get('/grimoire', [GrimoireController::class, 'index'])->name('grimoire');

Route::get('/monstres', [MonstreController::class, 'index'])->name('monstres');

Route::get('/carte', function () {
    return view('front/pages/carte');
})->name('carte');

Route::get('/', function () {
    $fiches = Fiche::all();
    return view('front/pages/home', compact('fiches'));
})->name('home');


Route::get('/pnj', function () {
    $pnjs = Pnj::all();
    return view('front/pages/pnj', compact('pnjs'));
})->name('pnj');

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
// Pnj
Route::get('/back/pnjs', [PnjController::class, 'index'])->name('pnj.index');
Route::get('/back/pnjs/create', [PnjController::class, 'create'])->name('pnj.create');
Route::post('/back/pnjs/store', [PnjController::class, 'store'])->name('pnj.store');
Route::get('/back/pnjs/{id}/read', [PnjController::class, 'read'])->name('pnj.read');
Route::get('/back/pnjs/{id}/edit', [PnjController::class, 'edit'])->name('pnj.edit');
Route::post('/back/pnjs/{id}/update', [PnjController::class, 'update'])->name('pnj.update');
Route::post('/back/pnjs/{id}/delete', [PnjController::class, 'destroy'])->name('pnj.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
// Fiche
Route::get('/back/fiches', [FicheController::class, 'index'])->name('fiche.index');
Route::get('/back/fiches/{id}/read', [FicheController::class, 'read'])->name('fiche.read');
Route::get('/back/fiches/{id}/edit', [FicheController::class, 'edit'])->name('fiche.edit');
Route::post('/back/fiches/{id}/update', [FicheController::class, 'update'])->name('fiche.update');
// Background
Route::get('/back/backgrounds', [BackgroundController::class, 'index'])->name('background.index');
Route::get('/back/backgrounds/{id}/read', [BackgroundController::class, 'read'])->name('background.read');
// Race
Route::get('/back/races', [RaceController::class, 'index'])->name('race.index');
Route::get('/back/races/{id}/read', [RaceController::class, 'read'])->name('race.read');
