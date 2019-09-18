<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home($value='')
    {
    	return view('static_pages/home');
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
