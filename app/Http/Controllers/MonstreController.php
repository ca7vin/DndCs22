<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MonstreController extends Controller
{
    public function index(Request $request)
    {   
        $monstres = Http::get('https://api.open5e.com/monsters/?limit=1100')['results'];
        return view("front/pages/monstres",compact('monstres'));
    } 

    // make a function to fetch more data from https://api.open5e.com/monsters/?page=1

}