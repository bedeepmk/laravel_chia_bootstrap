<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    
    public function contact()
    {
        return view('page.contact');
    }

    public function dashboard()
    {
        return view('page.dashboard');
    }

    public function mininglog()
    {
        return view('page.mininglog');
    }

    public function flotlog()
    {
        return view('page.flotlog');
    }

    public function pointlog()
    {
        return view('page.pointlog');
    }

    public function withdraw()
    {
        return view('page.withdraw');
    }
    
    public function myinfo()
    {
        return view('page.myinfo');
    }
}
