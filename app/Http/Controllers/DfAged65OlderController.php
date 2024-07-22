<?php

namespace App\Http\Controllers;

use App\Models\df_aged_65_older;
use App\Models\df_male_smokers;
use App\Models\df_female_smokers;
use App\Models\df_fully_people_vaccinated;
use App\Models\df_new_cases_syria_mean;
use Illuminate\Http\Request;

class DfAged65OlderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aged65older= df_aged_65_older::all();
        $malesmoker= df_male_smokers::all();
        $femalesmokers= df_female_smokers::all();
        $fullyPeopleVaccinated= df_fully_people_vaccinated::all();
        $newCasesSyriaMean= df_new_cases_syria_mean::all();
       return view('flot',compact('aged65older','malesmoker','femalesmokers','fullyPeopleVaccinated','newCasesSyriaMean'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(df_aged_65_older $df_aged_65_older)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(df_aged_65_older $df_aged_65_older)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, df_aged_65_older $df_aged_65_older)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(df_aged_65_older $df_aged_65_older)
    {
        //
    }
}
