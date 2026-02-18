<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public $movies;

    public function __construct()
    {
        $this->movies = [
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
    }

    public function index()
    {
        return $this->movies;
    }
}
