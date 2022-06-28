<?php


use App\Http\Controllers\PerfomanceController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/con', [PerfomanceController::class, 'get_container']);

Route::get('/addshow', function () {
    return view('make_play');
});
Route::post('/addshow', [PerfomanceController::class, 'add']);

Route::get('/con/{id}', [PerfomanceController::class, 'get_perfomance_info']);
