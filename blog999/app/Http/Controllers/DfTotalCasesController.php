<?php

namespace App\Http\Controllers;

use App\Models\df_total_cases;
use App\Models\df_world_ratio;
use App\Models\df_locations;
use App\Models\df_world_recent;
use App\Models\df_new_cases_syria_mean;
use Illuminate\Http\Request;

class DfTotalCasesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totle_case = df_total_cases::all()->first();
        $world_ratio = df_world_ratio::all()->first();
        $locations = df_locations::all()->first();
        $world_recent = df_world_recent::all()->first();
        $new_cases = df_new_cases_syria_mean::all()->first();
        return view('home',compact('totle_case','world_ratio','locations','world_recent','new_cases'));

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
    public function show(df_total_cases $df_total_cases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(df_total_cases $df_total_cases)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, df_total_cases $df_total_cases)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(df_total_cases $df_total_cases)
    {
        //
    }
}
