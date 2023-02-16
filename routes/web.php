<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TableauBordController;
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

Route::get('/', function () {
    return view('bienvenue');
});
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [TableauBordController::class, 'initializePageAccueil']);
    /*
    |--------------------------------------------------------------------------
    | Pointage
    |--------------------------------------------------------------------------
    */
    Route::post('addPointage', [TableauBordController::class, 'addPointage'])
        ->name('ajout-Pointage');
    Route::post('updatePointage', [TableauBordController::class, 'updatePointage'])
        ->name('edition-Pointage');
    Route::post('deletePointage', [TableauBordController::class, 'deletePointage'])
        ->name('suppression-Pointage');
});

require __DIR__.'/auth.php';
