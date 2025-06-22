<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('trainings', 'trainings');
Route::view('trainings-individual-internal', 'trainings-individual-internal');
Route::view('training-category', 'training-category');

Route::view('about', 'about');
