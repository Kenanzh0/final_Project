<?php

namespace App\Http\Controllers;

use App\Models\sick;
use Illuminate\Http\Request;

class SickController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     return view('sike');

    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sike');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //  dd( sick::all());
        $request->validate([
            'name' => 'required|string|max:255',
             'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:20',

            'appointment_date' => 'required|date',
        ]);

    // تحقق من توفر الموعد
    $appointmentExists = sick::where('appointment_date', $request->appointment_date)->exists();

    if ($appointmentExists) {
        return redirect()->back()->with('error', 'The selected appointment date and time is already booked. Please choose another time.');
    }





        sick::create($request->all());

        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(sick $sick)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sick $sick)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sick $sick)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sick $sick)
    {
        //
    }
}
