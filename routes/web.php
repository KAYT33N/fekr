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
use App\Http\Controllers\GameController;
use App\Models\Game;

Route::name('game.')->controller(GameController::class)->group(function(){
    Route::get('/','landing');
    Route::prefix('game')->group(function (){
        Route::post('enter','enter')->name('enter');
        Route::post('create','create')->name('create');
        Route::post('move','move')->name('move');
    });
});
