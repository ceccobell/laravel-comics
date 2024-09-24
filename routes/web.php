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

    $exploreDC = [
                [
                    'name' => 'DIGITAL COMICS',
                    'img' => 'resources/images/buy-comics-digital-comics.png',
                ],
                [
                    'name' => 'DC MERCHANDISE',
                    'img' => 'resources/images/buy-comics-merchandise.png',
                ],
                [
                    'name' => 'SUBSCRIPTION',
                    'img' => 'resources/images/buy-comics-subscriptions.png',
                ],
                [
                    'name' => 'COMIC SHOP LOCATOR',
                    'img' => 'resources/images/buy-comics-shop-locator.png',
                ],
                [
                    'name' => 'DC POWER VISA',
                    'img' => 'resources/images/buy-dc-power-visa.svg',
                ]
            ];
    return view('comics', compact('comics', 'exploreDC'));
})-> name('comics');
