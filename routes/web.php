<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/hello', [GreetingController::class, 'showHello']);
