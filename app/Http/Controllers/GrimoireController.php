<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GrimoireController extends Controller
{
    public function index()
    {
        $spells = Http::get('https://api.open5e.com/spells/?limit=321')['results'];
        return view("front/pages/grimoire",compact('spells'));
    }   
}
