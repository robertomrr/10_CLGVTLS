<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('ExLw', function () {
    return view('Ex_LivewireView');
});