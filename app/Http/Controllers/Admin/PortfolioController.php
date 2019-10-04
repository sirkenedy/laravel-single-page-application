<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Portfolio;

class PortfolioController extends Controller
{
    public function index() {
        $portfolios = Portfolio::all();
        return view('admin.manage_portfolio',[
            'title' => 'Manage Company Portfolio',
            'storeRoute' => 'admin.login',
            'updateRoute' => 'admin.password.request',
        ])->with('portfolios', $portfolios);
    }
}
