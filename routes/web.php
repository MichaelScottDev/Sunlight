<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome-au');
});

Route::get('/new', function () {
    return view('new');
});
