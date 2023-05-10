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
    $comics = config('comics');
    $footerItems = config('footerItems');
    $navbarTop = config('navbarTop');
    $navbar = config('navbar');
    $dcFeatures = config('dcFeatures');
    $dcNavbarBottom = config('dcNavbarBottom');

    return view('home', compact('navbar', 'comics', 'footerItems', 'dcFeatures', 'dcNavbarBottom', 'navbarTop'));
})->name('home');

Route::get('/movies', function () {
    $comics = config('comics');
    $footerItems = config('footerItems');
    $navbarTop = config('navbarTop');
    $navbar = config('navbar');
    $dcFeatures = config('dcFeatures');
    $dcNavbarBottom = config('dcNavbarBottom');

    return view('movies', compact('navbar', 'comics', 'footerItems', 'dcFeatures', 'dcNavbarBottom', 'navbarTop'));
})->name('movies');
