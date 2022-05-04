<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Background;
use App\Models\Fiche;
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
        return view('auth.register', compact('backgrounds'));
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
        ]);
        $user->save();

        $fiche = new Fiche;
        $fiche->user_id = $user->id;
        $fiche->namePerso = $request->namePerso;
        $fiche->avatar = $request->file("avatar")->hashName();
        $fiche->class = $request->class;
        $fiche->level = $request->level;
        $fiche->race = $request->race;
        $fiche->alignment = $request->alignment;
        $fiche->experience = $request->experience;
        $fiche->strength = $request->strength;
        $fiche->dexterity = $request->dexterity;
        $fiche->constitution = $request->constitution;
        $fiche->intelligence = $request->intelligence;
        $fiche->wisdom = $request->wisdom;
        $fiche->charisma = $request->charisma;
        $fiche->passive_wisdom = $request->passive_wisdom;
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
        $fiche->investigation = $request->investigation; //
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
        $request->file("avatar")->storePublicly('img', 'public');

        

        event(new Registered($user));
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
