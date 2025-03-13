<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('login', function () {
    return view('login');
});

Route::get('documentation', function () {
    return view('documentation');
});

Route::get('pricing', function () {
    return view('pricing');
});