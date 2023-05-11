<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\StatController;
use App\Http\Controllers\KalendarController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\AboutController;

use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\StatistikController;
use App\Http\Controllers\Admin\KalendarAdminController;
use App\Http\Controllers\Admin\GameAdminController;
use App\Http\Controllers\Admin\AboutAdminController;


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


Auth::routes();

    Route::get('/', [HomeController::class, 'index'])->name('index');

    Route::get('/player', [PlayerController::class, 'index'])->name('teamTeamPlayer');
    Route::get('/player/{id}', [PlayerController::class, 'show'])->name('showTeamPlayer');

    Route::get('/stat', [StatController::class, 'index'])->name('StatPlayer');
    Route::get('/stat/{id}', [StatController::class, 'show'])->name('ShowStatPlayer');

    Route::get('/kalendar', [KalendarController::class, 'index'])->name('kalendar');
    Route::get('/games', [GameController::class, 'index'])->name('games');
    Route::get('/about', [AboutController::class, 'index'])->name('about');


Route::middleware (['role:admin'])->prefix('admin_panel')->group( function () {
    Route::get('/', [HomeAdminController::class, 'index'])->name('home' );

    //TEAM ROUTE
    Route::get('/team', [TeamController::class, 'index'])->name('teamPlayer');
    Route::get('/team/create', [TeamController::class, 'create'])->name('createPlayer');
    Route::post('/team', [TeamController::class, 'store'])->name('storePlayer');
    Route::get('/team/{id}', [TeamController::class, 'show'])->name('showPlayer');
    Route::get('/team/{id}/edit', [TeamController::class, 'edit'])->name('editPlayer');
    Route::patch('/team/{id}', [TeamController::class, 'update'])->name('updatePlayer');
    Route::delete('/team/{id}', [TeamController::class, 'destroy'])->name('deletePlayer');

    //STATISTIKS ROUTE
    Route::get('/statistiks', [StatistikController::class, 'index'])->name('statAdminPlayer');
    Route::get('/statistiks/create', [StatistikController::class, 'create'])->name('createStatPlayer');
    Route::post('/statistiks', [StatistikController::class, 'store'])->name('storeStatPlayer');
    Route::get('/statistiks/{id}', [StatistikController::class, 'show'])->name('showStatPlayer');
    Route::get('/statistiks/{id}/edit', [StatistikController::class, 'edit'])->name('editStatPlayer');
    Route::patch('/statistiks/{id}', [StatistikController::class, 'update'])->name('updateStatPlayer');
    Route::delete('/statistiks/{id}', [StatistikController::class, 'destroy'])->name('deleteStatPlayer');

    Route::get('/kalendar', [KalendarAdminController::class, 'index'])->name('adminKalendar');
    Route::get('/games', [GameAdminController::class, 'index'])->name('adminGames');
    Route::get('/about', [AboutAdminController::class, 'index'])->name('adminAbout');
});

