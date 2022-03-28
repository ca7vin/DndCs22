<?php

namespace App\Http\Controllers;

use App\Models\Pnj;
use Illuminate\Http\Request;

class PnjController extends Controller
{
    //
    public function index()
    {
        $pnjs = Pnj::all();
        return view("/back/pnjs/all",compact("pnjs"));
    }
    public function create()
    {
        return view("/back/pnjs/create");
    }
    public function store(Request $request)
    {
        $pnj = new Pnj;
        $request->validate([
         'image'=> 'required',
         'prenom'=> 'required',
         'nom'=> 'required',
         'age'=> 'required',
         'description'=> 'required',
        ]); // store_validated_anchor;
        $pnj->image = $request->image;
        $pnj->prenom = $request->prenom;
        $pnj->nom = $request->nom;
        $pnj->age = $request->age;
        $pnj->description = $request->description;
        $pnj->save(); // store_anchor
        return redirect()->route("pnj.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $pnj = Pnj::find($id);
        return view("/back/pnjs/read",compact("pnj"));
    }
    public function edit($id)
    {
        $pnj = Pnj::find($id);
        return view("/back/pnjs/edit",compact("pnj"));
    }
    public function update($id, Request $request)
    {
        $pnj = Pnj::find($id);
        $request->validate([
         'image'=> 'required',
         'prenom'=> 'required',
         'nom'=> 'required',
         'age'=> 'required',
         'description'=> 'required',
        ]); // update_validated_anchor;
        $pnj->image = $request->image;
        $pnj->prenom = $request->prenom;
        $pnj->nom = $request->nom;
        $pnj->age = $request->age;
        $pnj->description = $request->description;
        $pnj->save(); // update_anchor
        return redirect()->route("pnj.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $pnj = Pnj::find($id);
        $pnj->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
