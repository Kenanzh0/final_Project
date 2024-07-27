<?php

namespace App\Http\Controllers;

use App\Models\df_syria_max;
use Illuminate\Http\Request;

class DfSyriaMaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $syriamax = df_syria_max::all(); // لاستخراج جميع السجلات من جدول users
        // dd($worldmax);
        return view("df_syria_max",compact('syriamax'));
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
    public function show(df_syria_max $df_syria_max)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(df_syria_max $df_syria_max)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, df_syria_max $df_syria_max)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(df_syria_max $df_syria_max)
    {
        //
    }
}
