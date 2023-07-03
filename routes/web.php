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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/i', function () {
    return view('dashboard');
});

Route::get('/scorecard', function () {
    return view('scorecard/src');
});

Route::get('/login', function () {
    return view('layouts/login');
});

Route::get('/overallgraph', function () {
    return view('scorecard/overallgraph');
});

Route::get('/overallgraph-1', function () {
    return view('scorecard/overallgraph');
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
    return view('kpianalysis/definition1');
});