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

Route::permanentRedirect('/', '/utilisateurs');


Route::get('/create/utilisateurs', function () {
    return view('create');
})->name('utilisateurs.create');

Route::resource('utilisateurs', UtilisateurController::class)->only([
    'store','show','index','edit','destroy','update'
]);
