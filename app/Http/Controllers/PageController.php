<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about ()
    {
        // $people = ['<span>Person1</span>', 'Person2', 'Person3'];
        $people = [];
        return view('pages.about', compact('people'));
    }

    public function contact () {
        return view('pages.contact');
    }
}
