<?php

use Illuminate\Support\Facades\Route;

// Password gate — handles POST submissions from the site-gate view
// (The SitePassword middleware intercepts the GET display; this handles the POST)
Route::post('/site-access', function () {
    // Handled entirely by SitePassword middleware — this is a fallback
    return redirect('/');
})->withoutMiddleware(\App\Http\Middleware\SitePassword::class);

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
