<?php

namespace App\Http\Controllers;

use App\Models\Race;
use Illuminate\Http\Request;

class RaceController extends Controller
{
    //
    public function index()
    {
        $races = Race::all();
        return view("/back/races/all",compact("races"));
    }
    public function read($id)
    {
        $race = Race::find($id);
        return view("/back/races/read",compact("race"));
    }
}
