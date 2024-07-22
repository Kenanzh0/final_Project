<?php

namespace App\Http\Controllers;

use App\Models\df_world_recent;
use Illuminate\Http\Request;

class DfWorldRecentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $worldrecent = df_world_recent::all(); // لاستخراج جميع السجلات من جدول users
        // dd($worldmax);
        return view("df_world_recent",compact('worldrecent'));
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
    public function show(df_world_recent $df_world_recent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(df_world_recent $df_world_recent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, df_world_recent $df_world_recent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(df_world_recent $df_world_recent)
    {
        //
    }
}
