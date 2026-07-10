<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminLoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/episode-5', function () {
    if (session('ep5_unlocked')) {
        return view('welcome-au-ep5');
    }
    return view('episode-5-locked');
});

Route::post('/episode-5/access', function (\Illuminate\Http\Request $request) {
    if ($request->input('password') === 'f2z9l6sgl2') {
        session(['ep5_unlocked' => true]);
        return redirect('/episode-5');
    }
    return redirect('/episode-5')->with('ep5_error', true);
});

// Unlisted preview permalink — serves Episode 5 content directly, bypassing the
// password gate, so it can be previewed away from the main site. Not linked anywhere.
Route::get('/preview/ep5-uTVroHn9W-li', function () {
    return view('welcome-au-ep5');
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
