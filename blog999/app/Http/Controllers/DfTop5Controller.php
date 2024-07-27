<?php

namespace App\Http\Controllers;

use App\Models\df_top5;
use App\Models\table_icu_hosp_patients_max;
use Illuminate\Http\Request;

class DfTop5Controller extends Controller
{
    public function index()
    {
       $top5= df_top5::all();

       return view('bar',compact('top5'));
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
    public function show(df_top5 $df_top5)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(df_top5 $df_top5)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, df_top5 $df_top5)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(df_top5 $df_top5)
    {
        //
    }
}
