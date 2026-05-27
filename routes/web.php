<?php

use Illuminate\Support\Facades\Route;

// Password gate — the SitePassword middleware intercepts this POST, checks
// the password, sets the session, and redirects. The route body below is an
// unreachable fallback (middleware always returns a response first).
Route::post('/site-access', function () {
    return redirect('/');
});

Route::get('/', function () {
    return view('welcome-au');
});

Route::get('/episode-2', function () {
    return view('welcome-au-ep2');
});

Route::get('/episode-3', function () {
    return view('welcome-au-ep3');
});

Route::get('/episode-4', function () {
    return view('welcome-au-ep4');
});

Route::get('/new', function () {
    return view('new');
});

Route::get('/white-papers', function () {
    return view('white-papers');
});
