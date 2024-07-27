<?php

namespace App\Http\Controllers;

use App\Models\df_world_ratio;
use Illuminate\Http\Request;

class DfWorldRatioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $world_ratio = df_world_ratio::all()->first();
        
        return view ('home', compact('world_ratio'));
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
    public function show(df_world_ratio $df_world_ratio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(df_world_ratio $df_world_ratio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, df_world_ratio $df_world_ratio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(df_world_ratio $df_world_ratio)
    {
        //
    }
}
