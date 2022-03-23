<?php

namespace App\Http\Controllers;

use App\Models\Joueur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class JoueurController extends Controller
{
    //
    public function index()
    {
        $joueurs = Joueur::all();
        return view("/back/joueurs/all",compact("joueurs"));
    }
    public function create()
    {
        return view("/back/joueurs/create");
    }
    public function store(Request $request)
    {
        $joueur = new Joueur;
        $destination = "img/" . $joueur->Image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $request->validate([
        //  'Image'=> 'required',
         'Joueur'=> 'required',
         'Nom'=> 'required',
         'Prenom'=> 'required',
         'Classe'=> 'required',
         'Niveau'=> 'required',
         'Experience'=> 'required',
         'Race'=> 'required',
        ]); // store_validated_anchor;
        $joueur->Image = $request->file("img")->hashName();
        $joueur->Joueur = $request->Joueur;
        $joueur->Nom = $request->Nom;
        $joueur->Prenom = $request->Prenom;
        $joueur->Classe = $request->Classe;
        $joueur->Niveau = $request->Niveau;
        $joueur->Experience = $request->Experience;
        $joueur->Race = $request->Race;
        $joueur->save(); // store_anchor
        return redirect()->route("joueur.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $joueur = Joueur::find($id);
        return view("/back/joueurs/read",compact("joueur"));
    }
    public function edit($id)
    {
        $joueur = Joueur::find($id);
        return view("/back/joueurs/edit",compact("joueur"));
    }
    public function update($id, Request $request)
    {
        $joueur = Joueur::find($id);
        $destination = "img/" . $joueur->Image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $request->validate([
        //  'Image'=> 'required',
         'Joueur'=> 'required',
         'Nom'=> 'required',
         'Prenom'=> 'required',
         'Classe'=> 'required',
         'Niveau'=> 'required',
         'Experience'=> 'required',
         'Race'=> 'required',
        ]); // update_validated_anchor;
        $joueur->Image = $request->file("img")->hashName();
        $joueur->Joueur = $request->Joueur;
        $joueur->Nom = $request->Nom;
        $joueur->Prenom = $request->Prenom;
        $joueur->Classe = $request->Classe;
        $joueur->Niveau = $request->Niveau;
        $joueur->Experience = $request->Experience;
        $joueur->Race = $request->Race;
        $joueur->save(); // update_anchor
        return redirect()->route("joueur.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $joueur = Joueur::find($id);
        $joueur->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
