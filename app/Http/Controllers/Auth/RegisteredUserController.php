<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Background;
use App\Models\Classe;
use App\Models\Fiche;
use App\Models\Race;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $backgrounds=Background::all();
        $races=Race::all();
        $classes=Classe::all();
        return view('auth.register', compact('backgrounds', 'races', 'classes'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'background_id' => $request->background,
            'race_id' => $request->race,
            'classe_id' => $request->class,
        ]);
        $user->save();
        $fiche = new Fiche;
        $fiche->user_id = $user->id;
        $fiche->namePerso = $request->namePerso;
        $fiche->avatar = $request->file("avatar")->hashName();
        // $fiche->class = $request->class;
        $fiche->level = 1;
        $fiche->race = $request->race;
        $fiche->class = $request->class;
        $fiche->alignment = $request->alignment;
        $fiche->experience = 0;
        $fiche->strength = $request->strength;
        $fiche->dexterity = $request->dexterity;
        $fiche->constitution = $request->constitution;
        $fiche->intelligence = $request->intelligence;
        $fiche->wisdom = $request->wisdom;
        $fiche->charisma = $request->charisma;
        $fiche->passive_wisdom = $request->wisdom;
        $fiche->inspiration = 0;
        $fiche->proficiency = 2;
        $fiche->save_strength = $request->strength;
        $fiche->save_dexterity = $request->dexterity;
        $fiche->save_constitution = $request->constitution;
        $fiche->save_intelligence = $request->intelligence;
        $fiche->save_wisdom = $request->wisdom;
        $fiche->save_charisma = $request->charisma;
        $fiche->acrobatics = $request->dexterity;
        $fiche->animal_handling = $request->wisdom;
        $fiche->arcana = $request->intelligence;
        $fiche->athletics = $request->strength;
        $fiche->deception = $request->charisma;
        $fiche->history = $request->intelligence;
        $fiche->insight = $request->wisdom;
        $fiche->intimidation = $request->charisma;
        $fiche->investigation = $request->intelligence; //
        $fiche->medicine = $request->wisdom;
        $fiche->nature = $request->intelligence;
        $fiche->perception = $request->wisdom;
        $fiche->performance = $request->charisma;
        $fiche->persuasion = $request->charisma;
        $fiche->religion = $request->intelligence;
        $fiche->sleight_of_hand = $request->dexterity;
        $fiche->stealth = $request->dexterity;
        $fiche->survival = $request->wisdom;
        $fiche->armor_class = $request->armor_class;
        $fiche->initiative = $request->dexterity;
        $fiche->speed = 9;
        $fiche->current_hitpoints = $request->current_hitpoints;
        $fiche->temporary_hitpoints = $request->temporary_hitpoints;
        $fiche->hit_dice = $request->hit_dice; //
        $fiche->personality_traits = $request->personality_traits;
        $fiche->personality_ideals = $request->personality_ideals;
        $fiche->personality_bonds = $request->personality_bonds;
        $fiche->personality_flaws = $request->personality_flaws;
        $fiche->profiencies_languages = $request->profiencies_languages;
        $fiche->features_traits = $request->features_traits;
        $fiche->spellcasting_class = $request->spellcasting_class;
        $fiche->spellcasting_ability = $request->spellcasting_ability;
        $fiche->spell_save_dc = 8 + $request->proficiency + $request->intelligence;
        $fiche->spell_attack_bonus = $request->proficiency + $request->intelligence;
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
        $request->file("avatar")->storePublicly('img', 'public');

        

        event(new Registered($user));
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
