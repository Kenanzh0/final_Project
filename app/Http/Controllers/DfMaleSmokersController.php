<?php

namespace App\Http\Controllers;

use App\Models\df_male_smokers;
use Illuminate\Http\Request;

class DfMaleSmokersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //     $malesmoker= df_male_smokers::all();
    //    return view('flot',compact('malesmoker'));
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
    public function show(df_male_smokers $df_male_smokers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(df_male_smokers $df_male_smokers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, df_male_smokers $df_male_smokers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(df_male_smokers $df_male_smokers)
    {
        //
    }
}
