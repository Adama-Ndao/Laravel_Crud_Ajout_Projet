<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetController;

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

Route::get('/projet', [ProjetController::class, 'projet'])->name('projet');
Route::get('/ajout', [ProjetController::class, 'ajout'])->name('ajout');
Route::post('/store', [ProjetController::class, 'store'])->name('store');
Route::get('/delete/{id}', [ProjetController::class, 'delete'])->name('delete');
Route::get('/phase/{id}', [ProjetController::class, 'phase'])->name('phase');
Route::get('/ajouter/{id}', [ProjetController::class, 'ajouter'])->name('ajouter');
Route::post('/storer', [ProjetController::class, 'storer'])->name('storer');
Route::get('/edit/{id}', [ProjetController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [ProjetController::class, 'update'])->name('update');

Route::post('/updated/{id}', [ProjetController::class, 'updated'])->name('updated');
Route::get('/supprimer/{id}', [ProjetController::class, 'supprimer'])->name('supprimer');