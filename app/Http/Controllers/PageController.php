<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function intro()
    {
        return view('page.intro');
    }

    public function whyus()
    {
        return view('page.whyus');
    }

    public function miningsite()
    {
        return view('page.miningsite');
    }

    public function purchase()
    {
        return view('page.purchase');
    }
    
    public function faq()
    {
        return view('page.faq');
    }

}
