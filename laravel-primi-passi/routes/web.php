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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/homepage', function () {
    $data = [
        'images' => [
            "https://www.uppa.it/wp-content/uploads/2020/04/favorire-sviluppo-neonato-950x545.jpg",
            "https://i0.wp.com/www.developersumo.com/wp-content/uploads/2020/03/software-developer.jpg?fit=880%2C569&ssl=1",
            "https://blumudus.it/wp-content/uploads/2016/12/Putin-e1481586349148.jpg",

        ]

    ];
    return view('homepage', $data);
});



Route::get('/test', function () {
    return view('test');
});
