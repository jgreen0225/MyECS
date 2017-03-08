<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stats;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        $url = '/';
        $title ='Home';
        return view ('pages.index', compact('title', 'url'));
    }
    public function about()
    {
        $url = '/about';
        $title = 'About';
        $people = [];
        return view('pages.about', compact('people', 'title', 'url'));
    }

    public function contact()
    {
        $url = '/contact';
        $title = 'Contact';
        return view('pages.contact', compact('title', 'url'));
    }
}
