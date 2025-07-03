<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title='Home'; // giving page title 
        return view('index', compact('title'));
    }

    public function news()
    {
        $title='News'; // giving page title 
        $image='ios.png';
        return view('news', compact('title', 'image'));
    }

    public function contact()
    {
        $title='Contact'; // giving page title 
        return view('contact', compact('title'));
    }

    public function about()
    {
        $title='About-Us'; // giving page title 
        return view('about', compact('title'));
    }
}
