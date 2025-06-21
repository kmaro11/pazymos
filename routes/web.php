<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/trainings', function () {
    return view('trainings');
});

Route::get('/training-category', function () {
    return view('training-category');
});
