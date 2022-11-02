<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GrimoireController extends Controller
{
    public function index()
    {
        $spells = Http::get('https://api.open5e.com/spells/?limit=321')['results'];
        $spells = collect($spells)->sortBy('level');
        return view("front/pages/grimoire",compact('spells'));
    }   

    public function search(Request $request){
        $spellSearch = $request->input('spellSearch');
        $spell = Http::get("https://api.open5e.com/spells/?search=$spellSearch")["results"];
        // dd($spell);
        $count = Http::get("https://api.open5e.com/spells/?search=$spellSearch")["count"];
        return view("front/pages/spellSearch",compact('spell', 'spellSearch', 'count'));
    }
}