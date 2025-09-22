<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;

class HomeController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::latest()->get();
        return view('landing', compact('portfolios'));
    }
}

