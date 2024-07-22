<?php

namespace App\Http\Controllers;

use App\Models\df_world_reproduction_rate;
use Illuminate\Http\Request;

class DfWorldReproductionRateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $worldReproductionRate = df_world_reproduction_rate::all(); // لاستخراج جميع السجلات من جدول users
        // dd($worldmax);
        return view("df_world_reproduction_rate",compact('worldReproductionRate'));
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
    public function show(df_world_reproduction_rate $df_world_reproduction_rate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(df_world_reproduction_rate $df_world_reproduction_rate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, df_world_reproduction_rate $df_world_reproduction_rate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(df_world_reproduction_rate $df_world_reproduction_rate)
    {
        //
    }
}
