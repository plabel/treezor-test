<?php

use App\Http\Controllers\UtilisateurController;
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

Route::get('/utilisateurs/{id}', function () {
    return view('welcome');
})->name('utilisateurs.show');

Route::get('/create/utilisateurs', function () {
    return view('create');
})->name('utilisateurs.create');

Route::post('/utilisateurs', [UtilisateurController::class, 'store'])
    ->name('utilisateurs.store')
;
