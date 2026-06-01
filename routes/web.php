<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminLoginController;
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

Route::get('/admin/login',  [AdminLoginController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login']);
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

Route::middleware('admin.auth')->group(function () {
    Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/tips/{id}', [AdminDashboardController::class, 'show'])->name('admin.tips.show');
    Route::patch('/admin/tips/{id}', [AdminDashboardController::class, 'updateStatus'])->name('admin.tips.update');
});
