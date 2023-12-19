<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\RaceController;


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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::resource('characters', CharacterController::class);
Route::resource('races', RaceController::class);
Route::get('/character-races/{race}', [RaceController::class, 'characterRaces'])->name('character-races');

