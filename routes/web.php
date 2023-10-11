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

Route::get('/', [App\Http\Controllers\carController::class, 'index']);
Route::get('/', [App\Http\Controllers\carController::class, 'index'])->name('home');
Route::post('/ajouterMarque', [App\Http\Controllers\carController::class, 'add']);
Route::get('{id}', [App\Http\Controllers\modeleController::class, 'show']);
Route::get('modele/{id}', [App\Http\Controllers\modeleController::class, 'show'])->name('modele.show');
Route::post('/', [App\Http\Controllers\modeleController::class, 'add']);
Route::post('/deleteMarque', [App\Http\Controllers\modeleController::class, 'deleteMarque']);
Route::post('/deleteModele', [App\Http\Controllers\modeleController::class, 'deleteModele']);
//Route::post('/incrementerModele', [App\Http\Controllers\modeleController::class, 'incrementationModele']);
//Route::post('/decrementationModele', [App\Http\Controllers\modeleController::class, 'decrementationModele']);
Route::post('/pageModifierCaracteristiqueModele', [App\Http\Controllers\modeleController::class, 'showModifier']);
Route::post('/modifierCaracteristiqueModele', [App\Http\Controllers\modeleController::class, 'modifierCaracteristiqueModele']);
Route::get('listeVoiture/{id}', [App\Http\Controllers\listeVoitureController::class, 'show']);
Route::post('/supprimerVoiture', [App\Http\Controllers\listeVoitureController::class, 'supprimerVoiture']);
Route::post('/showAddVoiture', [App\Http\Controllers\listeVoitureController::class, 'showAddVoiture']);
Route::post('/addVoitureStock', [App\Http\Controllers\listeVoitureController::class, 'addVoiture']);
Auth::routes();