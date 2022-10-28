<?php

namespace App\Http\Controllers;

use App\Models\Monstre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class MonstreController extends Controller
{
    public function index(Request $request)
    {   
        $page = 1;
        if ($request->page == null) {
            $page = 1;
        } else {
            $page = $request->page;
        }
        $next = $request->page + 1;
        $previous = $request->page - 1;
        $monstres = Http::get("https://api.open5e.com/monsters/?page=$page")["results"];
        // foreach ($monstres as $monstre) {
        //     $monstre = new Monstre($monstre);
        // }
        // $monstres = Monstre::paginate(10);
        return view("front/pages/monstres",compact('monstres', 'next', 'previous', 'page'));
        return view("front/pages/monstres",compact('monstres'));
    } 



}