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

Route::get('/trainings-individual-internal', function () {
    return view('trainings-individual-internal');
});
