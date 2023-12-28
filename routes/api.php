<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/characters' , [PageController::class , 'index']);
Route::get('/races' , [PageController::class , 'getRaces']);
Route::get('/skills' , [PageController::class , 'getSkills']);
Route::get('/characters-by-race/{race_slug}' , [PageController::class , 'getCharacterByRace']);
Route::get('/characters-by-skill/{skill_slug}' , [PageController::class , 'getCharacterBySkill']);
Route::get('/characters/get-character/{slug}' , [PageController::class , 'getCharacterBySlug']);
