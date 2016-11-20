<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHomePage()
    {
        return view('public.home.home');
    }

    public function showFacilityPage()
    {
        return view('public.home.facility');
    }

    public function showHowToReachPage()
    {
        return view('public.home.how-to-reach');
    }
}
