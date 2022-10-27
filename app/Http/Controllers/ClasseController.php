<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    //
    public function index()
    {
        $classes = Classe::all();
        return view("/back/classes/all",compact("classes"));
    }
    public function read($id)
    {
        $classe = Classe::find($id);
        return view("/back/classes/read",compact("classe"));
    }
}
