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
