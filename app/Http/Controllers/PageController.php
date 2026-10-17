<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about', [
            'course' => 'IT0049 Web System Technologies',
            'module' => 'Laravel Foundations',
        ]);
    }
}
