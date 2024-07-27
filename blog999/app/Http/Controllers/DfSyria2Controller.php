<?php

namespace App\Http\Controllers;

use App\Models\df_syria2;
use Illuminate\Http\Request;

class DfSyria2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $syria2 = df_syria2::all(); // لاستخراج جميع السجلات من جدول df_syria2
        // dd($syria2);
        return view("df_syria2",compact('syria2'));
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
    public function show(df_syria2 $df_syria2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(df_syria2 $df_syria2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, df_syria2 $df_syria2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(df_syria2 $df_syria2)
    {
        //
    }
}
