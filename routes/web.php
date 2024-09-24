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

    $dc_comics = [
               ['name' => 'Characters',
               'url' => '/caracters'], 
               ['name' => 'Comics',
               'url' => '/comics'],
               ['name' => 'Movies',
               'url' => '/movies'],
               ['name' => 'TV',
               'url' => '/TV'],
               ['name' => 'Games',
               'url' => '/games'],
               ['name' => 'Videos',
               'url' => '/videos'],
               ['name' => 'News',
               'url' => '/news'],
               ['name' => 'Collectibles',
               'url' => '/collectibles'],
               ['name' => 'Fans',
               'url' => '/fans'],
               ['name' => 'Shop',
               'url' => '/shop'],
    ];

    $shop = [
        [
            'name' => 'Shop DC',
            'url' => '/shopDC'
        ],
        [
            'name' => 'Shop DC Collectibles',
            'url' => '/shopDCcollectibles'
        ]
    ];

    $links_footer = [
        'dc' => [
            'title' => 'DC',
            'items' => [
                'Terms Of Use', 'Privacy policy(New)', 'Ad Choices', 'Advertising', 'Jobs',
                'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us'
            ],
        ],
        'sites' => [
            'title' => 'SITES',
            'items' => ['DC', 'MAD magazine', 'DC kids', 'DC Universe', 'DC Power Visa'],
        ]
    ];
    return view('comics', compact('comics', 'exploreDC', 'links_footer', 'shop', 'dc_comics'));
})-> name('comics');
