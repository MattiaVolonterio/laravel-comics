<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function comics()
    {
        $comics = config('comics');

        return view('comics', compact('comics'));
    }

    public function characters()
    {
        return view('characters');
    }

    public function movies()
    {
        return view('movies');
    }
    public function tv()
    {
        return view('tv');
    }
    public function games()
    {
        return view('games');
    }
    public function collectibles()
    {
        return view('collectibles');
    }
    public function videos()
    {
        return view('videos');
    }
    public function fans()
    {
        return view('fans');
    }
    public function news()
    {
        return view('news');
    }
    public function shop()
    {
        return view('shop');
    }
    public function comic_description($key)
    {
        $comics = config('comics');
        if (!array_key_exists($key, $comics)) {
            abort(404);
        } else {
            $comic = $comics[$key];
        }
        return view('comic_description', compact('comic'));
    }
}
