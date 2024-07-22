<?php

namespace App\Http\Controllers;

use App\Models\df_world_over_time;
use Illuminate\Http\Request;

class DfWorldOverTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $worldOverTime = df_world_over_time::all(); // لاستخراج جميع السجلات من جدول users
        // dd($worldmax);
        return view("df_world_over_time",compact('worldOverTime'));
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
    public function show(df_world_over_time $df_world_over_time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(df_world_over_time $df_world_over_time)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, df_world_over_time $df_world_over_time)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(df_world_over_time $df_world_over_time)
    {
        //
    }
}
