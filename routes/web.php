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
    return view('welcome-au-ep5');
});

Route::get('/episode-6', function () {
    return view('welcome-au-ep6');
});

Route::get('/episode-7', function () {
    return view('welcome-au-ep7');
});

// Legacy preview permalink — kept as a redirect so any shared link still works,
// now that Episode 5 is public at /episode-5.
Route::get('/preview/ep5-uTVroHn9W-li', function () {
    return redirect('/episode-5');
});

// Confidential, password-gated incident report for Queensland Police.
// Not linked anywhere, noindex, off the public site. Unguessable slug.
Route::get('/report/cLEd3aUOklc', function () {
    if (session('incident_unlocked')) {
        return view('incident-report');
    }
    return view('incident-locked');
});

Route::post('/report/cLEd3aUOklc/access', function (\Illuminate\Http\Request $request) {
    if ($request->input('password') === '5dbe93cc') {
        session(['incident_unlocked' => true]);
        return redirect('/report/cLEd3aUOklc');
    }
    return redirect('/report/cLEd3aUOklc')->with('incident_error', true);
});

// Standalone Comment / essay — a general, non-identifying piece on
// extortion by fabricated accusation. Names no one; describes no case.
Route::get('/comment/the-shakedown', function () {
    return view('comment-shakedown');
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
