<?php

namespace App\Http\Controllers;

use App\Models\df_jun_syria;
use App\Models\df_jan_egypt;
use Illuminate\Http\Request;

class DfJunSyriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $junsyria= df_jun_syria::all();
        $janegypt= df_jan_egypt::all();
        return view('chartjs',compact('junsyria','janegypt'));
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
    public function show(df_jun_syria $df_jun_syria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(df_jun_syria $df_jun_syria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, df_jun_syria $df_jun_syria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(df_jun_syria $df_jun_syria)
    {
        //
    }
}
