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

Route::get('/characters', function () {
    $comics = config('db.comics');

    $exploreDC = config('db.exploreDC');

    $dc_comics = config('db.dc_comics');

    $shop = config('db.shop');

    $links_footer = config('db.links_footer');

    $social_icons = config('db.social_icons');

    return view('characters', compact('comics', 'exploreDC', 'links_footer', 'shop', 'dc_comics', 'social_icons'));
})-> name('characters');

Route::get('/movies', function () {
    return view('movies');
})-> name('movies');

Route::get('/TV', function () {
    return view('TV');
})-> name('TV');

Route::get('/games', function () {
    return view('games');
})-> name('games');

Route::get('/videos', function () {
    return view('videos');
})-> name('videos');

Route::get('/news', function () {
    return view('news');
})-> name('news');

Route::get('/collectibles', function () {
    return view('collectibles');
})-> name('collectibles');

Route::get('/fans', function () {
    return view('fans');
})-> name('fans');

Route::get('/shop', function () {
    return view('shop');
})-> name('shop');

Route::get('/', function () {
    $comics = config('db.comics');

    $exploreDC = config('db.exploreDC');

    $dc_comics = config('db.dc_comics');

    $shop = config('db.shop');

    $links_footer = config('db.links_footer');

    $social_icons = config('db.social_icons');

    return view('comics', compact('comics', 'exploreDC', 'links_footer', 'shop', 'dc_comics', 'social_icons'));
})-> name('comics');

