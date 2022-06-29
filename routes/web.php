<?php


use App\Http\Controllers\ActorController;
use App\Http\Controllers\PerfomanceController;
use App\Http\Controllers\TicketController;
use Illuminate\Http\Request;
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

Route::get('/', [PerfomanceController::class, 'get_today_perfomances']);

Route::get('/con', [PerfomanceController::class, 'get_container']);

Route::get('/addshow', function () {
    return view('make_play');
});
Route::post('/addshow', [PerfomanceController::class, 'add']);

Route::get('/con/{id}', [PerfomanceController::class, 'get_perfomance_info']);

Route::get('/actors', [ActorController::class, 'get_actors']);

Route::get('/con/{id}/buy-ticket/', [TicketController::class, 'get_ticket']);

Route::post('/con/{id}/buy-ticket/', [TicketController::class, 'post_ticket']);

Route::get('/actors/{id}', [ActorController::class, 'get_actor']);
