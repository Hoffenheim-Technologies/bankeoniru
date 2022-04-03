<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('wellcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/campaign', function () {
    return view('campaign');
});
Route::get('/donate', function () {
    return view('donate');
});
Route::get('/cause', function () {
    return view('cause');
});
Route::get('/join', function () {
    return view('join');
});
Route::get('/volunteer', function () {
    return view('volunteer');
});
Route::get('/background', function () {
    return view('background');
});
Route::get('/political', function () {
    return view('political');
});
Route::get('/end-sars', function () {
    return view('sars');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'dashboard'])->name('admin_dashboard');
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile/{id}', [ProfileController::class, 'store'])->name('profile.store');


    Route::get('/change-password', function () {
        return view('admin.change-password');
    });
});

Route::controller(SubscriberController::class)->group(function() {
    Route::get('/subscribers', 'index');
    Route::get('/subscribers/{id}', 'show');
    Route::post('/', 'store');
});

Route::get('/{any}', function($any) {
    return view('error')->with('route', $any);
});
