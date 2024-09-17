<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\NeoDataController;

Route::get('/', function () {
    return view('show_neo_date_range');
});


Route::get('neo-by-date', [NeoDataController::class, 'neobydate']);
Route::post('neo-data', [NeoDataController::class, 'neodata']);
Route::post('neo-data-by-api', [NeoDataController::class, 'neodatabyapi']);