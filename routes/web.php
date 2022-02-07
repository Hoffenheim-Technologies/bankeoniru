<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
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
Route::get('/{any}', function($any) {
    return view('error')->with('route', $any);
});