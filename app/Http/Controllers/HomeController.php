<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\df_total_cases;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totle_case = df_total_cases::all();
        return view('home',compact('totle_case'));
    }
}
