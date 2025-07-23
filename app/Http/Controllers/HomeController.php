<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Welcome to Our Job Portal';
        $description = 'Find your dream job with us.';

        return view('pages.index', compact('title', 'description'));
    }

    public function about()
    {
        $title = 'About Us';
        $content = 'We are dedicated to connecting job seekers with employers.';

        return view('pages.about', compact('title', 'content'));
    }
}
