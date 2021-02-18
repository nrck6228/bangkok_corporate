<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\ManageController;

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

/* Front */
Route::any('/coverpage', function () {
    return view('coverpage');
});

Route::any('/', function () {
    return view('home');
});

Route::any('/about', function () {
    return view('about');
});

Route::any('/contact', function () {
    return view('contact');
});

Route::any('/news', function () {
    return view('news-list');
});

Route::any('/news-detail', function () {
    return view('news-detail');
});

Route::any('/egp-bma', function () {
    return view('egp-bma');
});

Route::any('/egp-gov', function () {
    return view('egp-gov');
});

Route::any('/service', function () {
    return view('service-list');
});

Route::any('/service-detail', function () {
    return view('service-detail');
});

Route::any('/highlight', function () {
    return view('highlight-list');
});

Route::any('/highlight-detail', function () {
    return view('highlight-detail');
});

Route::any('/infographic', function () {
    return view('infographic-list');
});

Route::any('/infographic-detail', function () {
    return view('infographic-detail');
});

Route::any('/login', function () {
    return view('login');
});

Route::any('/forgot', function () {
    return view('forgot-password');
});

Route::any('/change', function () {
    return view('change-password');
});

Route::any('/register', function () {
    return view('register');
});

Route::any('/register-form', function () {
    return view('register-form');
});

Route::any('/sitemap', function () {
    return view('sitemap');
});

Route::any('/search', function () {
    return view('search');
});

Route::any('/album', function () {
    return view('album');
});

Route::any('/video', function () {
    return view('video');
});

Route::any('/organization', function () {
    return view('organization');
});
