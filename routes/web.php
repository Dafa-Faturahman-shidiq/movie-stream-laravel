<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckMembership;

Route::get('/', function () {
    return view('welcome');
});

$movies = [
    [
        'title' => 'One piece Film Red',
        'director' => 'Gorō Taniguchi',
        'year' => 2022,
    ],
    [
        'title' => 'Your Name',
        'director' => 'Makoto Shinkai',
        'year' => 2016,
    ],
    [
        'title' => 'kimetsu no yaiba: mugen train',
        'director' => 'Yuki Kajiura',
        'year' => 2020,
    ],
];

Route::get('/movies/{id}', function ($id) use ($movies) {
    return $movies[$id];
})->middleware('isMember');

Route::get('/pricing', function () {
    return 'BELI MEMBERSHIP DULU WOOO!!! ';
});
