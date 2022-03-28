<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GrimoireController extends Controller
{
    public function index()
    {
        $spells = Http::get('https://www.dnd5eapi.co/api/spells')['results'];
        $spellNames = [];
        foreach ($spells as $value) {
            array_push($spellNames, $value['index']);
        }
        foreach ($spellNames as $value) {
            $spell = Http::get("https://www.dnd5eapi.co/api/spells/$value");
        }
        return view("front/pages/grimoire",compact('spells'));
    }           
}
