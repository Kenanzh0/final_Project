<?php

namespace App\Http\Controllers;

use App\Models\df_world_max_new_death;
use Illuminate\Http\Request;
use App\Models\User;


class DfWorldMaxNewDeathController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $worldmax = df_world_max_new_death::all(); // لاستخراج جميع السجلات من جدول users
        // dd($worldmax);
        return view("df_world_max_new_death",compact('worldmax'));
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
    public function show(df_world_max_new_death $df_world_max_new_death)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(df_world_max_new_death $df_world_max_new_death)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, df_world_max_new_death $df_world_max_new_death)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(df_world_max_new_death $df_world_max_new_death)
    {
        //
    }
}
