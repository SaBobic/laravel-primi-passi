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
    $title = 'Hello World';
    return view('home', compact('title'));
})->name('homepage');

Route::get('/services', function () {
    $title = 'Services';
    return view('services', compact('title'));
})->name('services');

Route::get('/case-studies', function () {
    $title = 'Case Studies';
    return view('casestudies', compact('title'));
})->name('case-studies');

Route::get('/meet-the-team', function () {
    $title = 'Meet The Team';
    return view('meettheteam', compact('title'));
})->name('meet-the-team');

Route::get('/news', function () {
    $title = 'News';
    return view('news', compact('title'));
})->name('news');

Route::get('/get-in-touch', function () {
    $title = 'Get In Touch';
    return view('getintouch', compact('title'));
})->name('get-in-touch');