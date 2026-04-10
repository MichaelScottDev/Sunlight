<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome-au');
});

Route::get('/episode-2', function () {
    return view('welcome-au-ep2');
});

Route::get('/new', function () {
    return view('new');
});

Route::get('/white-papers', function () {
    return view('white-papers');
});
