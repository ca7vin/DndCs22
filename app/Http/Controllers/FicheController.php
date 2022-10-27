<?php

namespace App\Http\Controllers;

use App\Models\Background;
use App\Models\Classe;
use App\Models\Fiche;
use App\Models\Race;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

// use Illuminate\Support\Facades\Auth;

class FicheController extends Controller
{
    //
    public function index()
    {
        $fiches = Fiche::all();
        return view("/back/fiches/all",compact("fiches"));
    }
    public function read($id)
    {
        $fiche = Fiche::find($id);
        return view("/back/fiches/read",compact("fiche"));
    }
    public function edit($id)
    {
        $fiche = Fiche::find($id);
        $backgrounds = Background::all();
        $races = Race::all();
        $classes = Classe::all();
        return view("/front/pages/fichepj-edit",compact("fiche", "backgrounds", "races", "classes"));
    }
    public function update($id, Request $request)
    {
        $fiche = Fiche::find($id);
        $request->validate([
         'namePerso'=> 'required',
         'class'=> 'required',
         'level'=> 'required',
         'race'=> 'required',
         'alignment'=> 'required',
         'experience'=> 'required',
         'strength'=> 'required',
         'dexterity'=> 'required',
         'constitution'=> 'required',
         'intelligence'=> 'required',
         'wisdom'=> 'required',
         'charisma'=> 'required',
        //  'passive_wisdom'=> 'required',
         'inspiration'=> 'required',
         'proficiency'=> 'required',
         'save_strength'=> 'required',
         'save_dexterity'=> 'required',
         'save_constitution'=> 'required',
         'save_intelligence'=> 'required',
         'save_wisdom'=> 'required',
         'save_charisma'=> 'required',
         'acrobatics'=> 'required',
         'animal_handling'=> 'required',
         'arcana'=> 'required',
         'athletics'=> 'required',
         'deception'=> 'required',
         'history'=> 'required',
         'insight'=> 'required',
         'intimidation'=> 'required',
         'investigation'=> 'required',
         'medicine'=> 'required',
         'nature'=> 'required',
         'perception'=> 'required',
         'performance'=> 'required',
         'persuasion'=> 'required',
         'religion'=> 'required',
         'sleight_of_hand'=> 'required',
         'stealth'=> 'required',
         'survival'=> 'required',
         'armor_class'=> 'required',
         'initiative'=> 'required',
         'speed'=> 'required',
         'current_hitpoints'=> 'required',
        //  'temporary_hitpoints'=> 'required',
         'hit_dice'=> 'required',
         'personality_traits'=> 'required',
         'personality_ideals'=> 'required',
         'personality_bonds'=> 'required',
         'personality_flaws'=> 'required',
         'profiencies_languages'=> 'required',
         'features_traits'=> 'required',
         'spellcasting_class'=> 'required',
         'spellcasting_ability'=> 'required',
         'spell_save_dc'=> 'required',
         'spell_attack_bonus'=> 'required',
        'platinum_coins'=> 'required',
        'gold_coins'=> 'required',
        'silver_coins'=> 'required',
        'copper_coins'=> 'required',
        'inventory'=> 'required',
        'weapon1'=> 'required',
        'bonus_attack1'=> 'required',
        'bonus_damage1'=> 'required',
        'type_damage1'=> 'required',
        ]); // update_validated_anchor;
        $fiche->namePerso = $request->namePerso;
        // $fiche->avatar = $request->file("avatar")->hashName();
        // default image
        if ($request->avatar === null) {
            $fiche->avatar = $fiche->avatar;
        } else {
            if ($fiche->avatar != "default.jpg") {
                File::delete("images/". $fiche->avatar);
            }
            $fiche->avatar = $request->avatar->hashName();
            $request->file("avatar")->storePublicly('img', 'public');
        }
        // $fiche->background = $request->background;
        $fiche->user->background_id = $request->background;
        $fiche->user->race_id = $request->race;
        $fiche->user->classe_id = $request->class;
        $fiche->class = $request->class;
        $fiche->user->save();
        $fiche->level = $request->level;
        // $fiche->race = $request->race;
        $fiche->alignment = $request->alignment;
        $fiche->experience = $request->experience;
        $fiche->strength = $request->strength;
        $fiche->dexterity = $request->dexterity;
        $fiche->constitution = $request->constitution;
        $fiche->intelligence = $request->intelligence;
        $fiche->wisdom = $request->wisdom;
        $fiche->charisma = $request->charisma;
        // // $fiche->passive_wisdom = $request->passive_wisdom;
        $fiche->inspiration = $request->inspiration;
        $fiche->proficiency = $request->proficiency;
        $fiche->save_strength = $request->save_strength;
        $fiche->save_dexterity = $request->save_dexterity;
        $fiche->save_constitution = $request->save_constitution;
        $fiche->save_intelligence = $request->save_intelligence;
        $fiche->save_wisdom = $request->save_wisdom;
        $fiche->save_charisma = $request->save_charisma;
        $fiche->acrobatics = $request->acrobatics;
        $fiche->animal_handling = $request->animal_handling;
        $fiche->arcana = $request->arcana;
        $fiche->athletics = $request->athletics;
        $fiche->deception = $request->deception;
        $fiche->history = $request->history;
        $fiche->insight = $request->insight;
        $fiche->intimidation = $request->intimidation;
        $fiche->investigation = $request->investigation;
        $fiche->medicine = $request->medicine;
        $fiche->nature = $request->nature;
        $fiche->perception = $request->perception;
        $fiche->performance = $request->performance;
        $fiche->persuasion = $request->persuasion;
        $fiche->religion = $request->religion;
        $fiche->sleight_of_hand = $request->sleight_of_hand;
        $fiche->stealth = $request->stealth;
        $fiche->survival = $request->survival;
        $fiche->armor_class = $request->armor_class;
        $fiche->initiative = $request->initiative;
        $fiche->speed = $request->speed;
        $fiche->current_hitpoints = $request->current_hitpoints;
        // $fiche->temporary_hitpoints = $request->temporary_hitpoints;
        $fiche->hit_dice = $request->hit_dice;
        $fiche->personality_traits = $request->personality_traits;
        $fiche->personality_ideals = $request->personality_ideals;
        $fiche->personality_bonds = $request->personality_bonds;
        $fiche->personality_flaws = $request->personality_flaws;
        $fiche->profiencies_languages = $request->profiencies_languages;
        $fiche->features_traits = $request->features_traits;
        $fiche->spellcasting_class = $request->spellcasting_class;
        $fiche->spellcasting_ability = $request->spellcasting_ability;
        $fiche->spell_save_dc = $request->spell_save_dc;
        $fiche->spell_attack_bonus = $request->spell_attack_bonus;
        $fiche->platinum_coins = $request->platinum_coins;
        $fiche->gold_coins = $request->gold_coins;
        $fiche->silver_coins = $request->silver_coins;
        $fiche->copper_coins = $request->copper_coins;
        $fiche->inventory = $request->inventory;
        $fiche->weapon1 = $request->weapon1;
        $fiche->bonus_damage1 = $request->bonus_damage1;
        $fiche->bonus_attack1 = $request->bonus_attack1;
        $fiche->type_damage1 = $request->type_damage1;
        $fiche->save(); // update_anchor
        return redirect()->route('fichepj');
    }
}
