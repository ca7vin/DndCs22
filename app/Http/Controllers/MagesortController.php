<?php

namespace App\Http\Controllers;

use App\Models\Magesort;
use Illuminate\Http\Request;

class MagesortController extends Controller
{
    //
    public function index()
    {
        $magesorts = Magesort::all();
        return view("/back/magesorts/all",compact("magesorts"));
    }
    public function create()
    {
        return view("/back/magesorts/create");
    }
    public function store(Request $request)
    {
        $magesort = new Magesort;
        $request->validate([
         'sort'=> 'required',
         'niveau'=> 'required',
         'ecole'=> 'required',
         'incantation'=> 'required',
         'concentration'=> 'required',
         'description'=> 'required',
         'portee'=> 'required',
        ]); // store_validated_anchor;
        $magesort->sort = $request->sort;
        $magesort->niveau = $request->niveau;
        $magesort->ecole = $request->ecole;
        $magesort->incantation = $request->incantation;
        $magesort->concentration = $request->concentration;
        $magesort->description = $request->description;
        $magesort->portee = $request->portee;
        $magesort->save(); // store_anchor
        return redirect()->route("magesort.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $magesort = Magesort::find($id);
        return view("/back/magesorts/read",compact("magesort"));
    }
    public function edit($id)
    {
        $magesort = Magesort::find($id);
        return view("/back/magesorts/edit",compact("magesort"));
    }
    public function update($id, Request $request)
    {
        $magesort = Magesort::find($id);
        $request->validate([
         'sort'=> 'required',
         'niveau'=> 'required',
         'ecole'=> 'required',
         'incantation'=> 'required',
         'concentration'=> 'required',
         'description'=> 'required',
         'portee'=> 'required',
        ]); // update_validated_anchor;
        $magesort->sort = $request->sort;
        $magesort->niveau = $request->niveau;
        $magesort->ecole = $request->ecole;
        $magesort->incantation = $request->incantation;
        $magesort->concentration = $request->concentration;
        $magesort->description = $request->description;
        $magesort->portee = $request->portee;
        $magesort->save(); // update_anchor
        return redirect()->route("magesort.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $magesort = Magesort::find($id);
        $magesort->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
