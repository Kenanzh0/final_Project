<?php

namespace App\Http\Controllers;

use App\Models\df_syria_recent2;
use Illuminate\Http\Request;

class DfSyriaRecent2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $syriarecent2 = df_syria_recent2::all(); // لاستخراج جميع السجلات من جدول users
        // dd($worldmax);
        return view("df_syria_recent2",compact('syriarecent2'));
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
    public function show(df_syria_recent2 $df_syria_recent2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(df_syria_recent2 $df_syria_recent2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, df_syria_recent2 $df_syria_recent2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(df_syria_recent2 $df_syria_recent2)
    {
        //
    }
}
