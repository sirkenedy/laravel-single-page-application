<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;
use App\Service;
use App\Category;
use App\Portfolio;
use App\Team;

class HomesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $HomeTitle = Home::fetchSectionById('1');
        $serviceTitle = Home::fetchSectionById('2');
        $aboutTitle = Home::fetchSectionById('3');
        $portfolioTitle = Home::fetchSectionById('4');
        $teamTitle = Home::fetchSectionById('5');
        $contactTitle = Home::fetchSectionById('6');
        $services = Service::all()->take(4);
        $categories = Category::all();
        $portfolios = Portfolio::all();
        $teams = Team::all();
        // return $HomeTitle." and ".$serviceTitle;
        // return $services;
        return view('home.index', compact('HomeTitle', 'serviceTitle','aboutTitle','portfolioTitle', 'teamTitle','contactTitle', 'services','categories', 'portfolios', 'teams' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

