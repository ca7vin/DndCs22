<?php

namespace App\Http\Controllers;

use App\Models\Background;
use App\Models\User;
use Illuminate\Http\Request;

class BackgroundController extends Controller
{
    //
    public function index()
    {
        $backgrounds = Background::all();
        return view("/back/backgrounds/all",compact("backgrounds"));
    }
    public function read($id)
    {
        $background = Background::find($id);
        return view("/back/backgrounds/read",compact("background"));
    }
}
