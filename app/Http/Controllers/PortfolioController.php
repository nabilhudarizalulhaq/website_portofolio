<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{

    public function landing()
    {
        // hanya 3 terakhir untuk landing
        $portfolios = Portfolio::latest()->take(3)->get();
        return view('landing', compact('portfolios'));
    }
    public function index()
    {
        $portfolios = Portfolio::latest()->get();
        return view('portfolio', compact('portfolios'));
    }

    public function show($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('portfolio.show', compact('portfolio'));
    }
}
