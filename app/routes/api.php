<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('clans', ClanController::class);

Route::get('/clans', [ClanController::class, 'vratiSveClanove']);
Route::post('/clans', [ClanController::class, 'dodajClana']);
Route::delete('/clans/{clan}', [ClanController::class, 'obrisiClana']);


Route::resource('pozajmicas', PozajmicaController::class);

Route::get('/pozajmicas', [PozajmicaController::class, 'vratiSvePozajmice']);
Route::post('/pozajmicas', [PozajmicaController::class, 'dodajPozajmicu']);
Route::delete('/pozajmicas/{pozajmica}', [PozajmicaController::class, 'obrisiPozajmicu']);