<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;

class PortfolioController extends Controller
{

    public function landing()
    {
        $portfolios = Portfolio::latest()->take(3)->get();
        return view('landing', compact('portfolios'));
    }
    public function index()
    {
        $portfolios = Portfolio::latest()->get();
        return view('portfolio', compact('portfolios'));
    }

    public function show(Portfolio $portfolio)
    {
        return view('portfolio.show', compact('portfolio'));
    }
}
