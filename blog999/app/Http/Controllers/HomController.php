<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\df_total_cases;
use App\Models\df_world_ratio;
use App\Models\df_locations;
use App\Models\df_world_recent;
use App\Models\df_new_cases_syria_mean;
class HomController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totle_case = df_total_cases::all()->first();
        $world_ratio = df_world_ratio::all()->first();
        $locations = df_locations::all()->first();
        $world_recent = df_world_recent::all()->first();
        $new_cases = df_new_cases_syria_mean::all()->first();
        return view('home',compact('totle_case','world_ratio','locations','world_recent','new_cases'));
    }
}
