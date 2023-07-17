<?php

use App\Http\Controllers\AuthController;
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
    return view('dashboard');
});

Route::post('/log-in', [AuthController::class,'authenticate'])->name('login');

Route::get('/scorecard', function () {
    return view('scorecard/src');
});

Route::get('/annual', function () {
    return view('scorecard/annual');
});

Route::get('/overallgraph', function () {
    return view('scorecard/overallgraph');
});

Route::get('/definition', function () {
    return view('analysis/definition');
});

Route::get('/overalltable', function () {
    return view('scorecard/overalltable');
});

Route::get('/anuall', function () {
    return view('scorecard/anuall');
});

Route::get('/overall', function () {
    return view('scorecard/overall');
});

Route::get('/report', function () {
    return view('scorecard/report');
});

Route::get('/reportcard', function () {
    return view('scorecard/reportcard');
});

Route::get('/definition1', function () {
<<<<<<< Updated upstream
    return view('analysis/definition1');
});

Route::get('/graph', function () {
    return view('analysis/graph');
});

Route::get('/analysisgraph', function () {
    return view('analysis/analysisgraph');
});

Route::get('/analysisrc', function () {
    return view('analysis/analysisrc');
});

Route::get('/login', function () {
    return view('login/login');
});


=======
    return view('kpianalysis/definition1');
});

Route::get('/reportcards', function () {
    return view('kpianalysis/reportcards');
});

Route::get('/reportcards1', function () {
    return view('kpianalysis/reportcards1');
});
>>>>>>> Stashed changes
