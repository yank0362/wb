<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class StaticPagesController extends Controller
{
    public function home($value='')
    {
        $feed_items = [];
        if (Auth::check()) {
            $feed_items = Auth::user()->feed()->paginate(30);
        }
    	return view('static_pages/home', compact('feed_items'));
    }

    public function help($value='')
    {
    	# code...
    	return view('static_pages/help');
    
    }

    public function about($value='')
    {
    	return view('static_pages/about');
    
    }
}
