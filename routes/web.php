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
    return view('home');
})->name("Homepage");

Route::get('/filmlist', function () {
    $films = [
        'Luther',
        'Era ora',
        'Megan',
        'Poker face'
    ];

    return view('filmlist', compact('films'));
})->name("filmlist");

Route::get('/serieslist', function () {

    $series = [
        'Chapelwate',
        'You',
        'Lupin',
        'The walking dead'
    ];

    return view('serieslist', compact('series'));
})->name("Serie");
