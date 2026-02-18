<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckMembership;
use App\Http\Controllers\MovieController;


Route::group(
    [
    'prefix'=> 'movie',
    'middleware'=> ['isAuth'],
    ],
    function ()  {

    Route::get('/', [MovieController::class,'index']);

    // Route::get('/{id}', function ($id) use ($movies) {
    //     return $movies[$id];
    // })->middleware(['isMember']);

});



Route::get('/pricing', function () {
    return 'BELI MEMBERSHIP DULU WOOO!!! ';
});

Route::get('/Login', function () {
    return 'Login dulu wooo!!! ';
})->name('login');
