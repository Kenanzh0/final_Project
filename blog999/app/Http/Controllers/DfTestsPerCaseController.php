<?php

namespace App\Http\Controllers;

use App\Models\df_tests_per_case;
use Illuminate\Http\Request;

class DfTestsPerCaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testsPerCase = df_tests_per_case::all(); // لاستخراج جميع السجلات من جدول users
        // dd($worldmax);
        return view("df_tests_per_case",compact('testsPerCase'));
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
    public function show(df_tests_per_case $df_tests_per_case)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(df_tests_per_case $df_tests_per_case)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, df_tests_per_case $df_tests_per_case)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(df_tests_per_case $df_tests_per_case)
    {
        //
    }
}
