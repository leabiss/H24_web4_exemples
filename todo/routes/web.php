<?php

use App\Http\Controllers\TacheController;
use Illuminate\Support\Facades\DB;
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
    return view('welcome', ["nom" => "BOB"]);
});

/* Route::get('/taches', [TacheController::class, 'index'])->name('taches.index');
Route::get('/taches/create', [TacheController::class, 'create'])->name('taches.create');
Route::get('/taches/{tache}', [TacheController::class, 'show'])->name('taches.show'); */

Route::resource('taches', TacheController::class)->except([
    'destroy',
])->parameters([
    'taches' => 'tache'
]);

Route::get('/apropos', function () {
    return view('apropos');
});
