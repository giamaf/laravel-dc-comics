<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function characters()
    {
        return view('others_route.characters');
    }

    public function movie()
    {
        return view('others_route.movies');
    }

    public function tv()
    {
        return view('others_route.tv');
    }

    public function games()
    {
        return view('others_route.games');
    }

    public function collectibles()
    {
        return view('others_route.collectibles');
    }

    public function videos()
    {
        return view('others_route.videos');
    }

    public function fans()
    {
        return view('others_route.fans');
    }

    public function news()
    {
        return view('others_route.news');
    }

    public function shop()
    {
        return view('others_route.shop');
    }
}