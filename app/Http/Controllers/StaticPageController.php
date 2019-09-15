<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function home()
    {
        $feed_items = [];
        if (Auth::check()) {
            $feed_items = Auth::user()->feed()->paginate(30);
        }
        return view('home', compact('feed_items'));
    }

    public function help()
    {
        return view('help');
    }

    public function about()
    {
        # code...
    }
}
