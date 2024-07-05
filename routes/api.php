<?php

use App\Http\Controllers\CheckKodamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    return "API";
});

Route::apiResource('/check', CheckKodamController::class);
