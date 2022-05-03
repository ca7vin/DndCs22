@extends('front/layouts/app')
@section('content')
    @include('layouts.navigation')
    <section class='w-full my-5'>
        <form action="{{ route('fiche.update', \Illuminate\Support\Facades\Auth::user()->fiche->id) }}" enctype="multipart/form-data" method="POST">
            @method('POST')
            @csrf
            {{-- <img src="{{ asset('img/corner-br.png') }}" alt="" class="cornerDeco absolute right-1 bottom-2">
        <img src="{{ asset('img/corner-bl.png') }}" alt="" class="cornerDeco absolute left-1 bottom-2">
        <img src="{{ asset('img/corner-tl.png') }}" alt="" class="cornerDeco absolute left-1 top-2">
        <img src="{{ asset('img/corner-tr.png') }}" alt="" class="cornerDeco absolute right-1 top-2"> --}}
            <div class="flex flex-col justify-center items-center p-10 m-10 borderFiche relative overflow-hidden">
                <img class='absolute w-full dragonL' src="{{ asset('img/dragonL.png') }}" alt="">
                <img class='absolute w-full dragonR' src="{{ asset('img/dragonR.png') }}" alt="">
                <img class='absolute w-1/4 dragonHead' src="{{ asset('img/dragonHead.png') }}" alt="">
                <h2 class="text-3xl text-center text-red-900 font-bold uppercase mb-10 dividerTitle p-2">Fiche Personnage
                </h2>
                @if ($errors->any())
                    <div class='bg-yellow-600 text-white text-center rounded-lg w-full p-5'>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="flex justify-around items-center w-full m-20 p-5 relative">
                    <img class='absolute dividerDivT w-1/2' src="{{ asset('img/divider3.png') }}" alt="">
                    <img class='absolute dividerDivB w-1/2' src="{{ asset('img/divider2.png') }}" alt="">
                    <div class="flex flex-col items-center justify-center w-1/5 ml-64">
                        <div class='flex flex-col items-center justify-center mb-3'>
                            <label for="namePerso">Nom</label>
                            <input class="form-input" type='text' name='namePerso'
                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->namePerso }}'>
                        </div>
                        <div class='flex flex-col items-center justify-center mb-3'>
                            <label for="name">Race</label>
                            <input class="form-input" type='text' name='race'
                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->race }}'>
                        </div>
                        <div class='flex flex-col items-center justify-center mb-3'>
                            <label for="name">Alignement</label>
                            <input class="form-input" type='text' name='alignment'
                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->alignment }}'>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center w-1/5">
                        <label for="avatar">Choisissez un avatar :</label>
                        <input type="file" id="avatar" name="avatar">
                    </div>
                    <div class="flex flex-col items-center justify-center w-1/5 mr-64">
                        <div class='flex flex-col items-center justify-center mb-3'>
                            <label for="name">Classe</label>
                            <input class="form-input" type='text' name='class'
                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->class }}'>
                        </div>
                        <div class='flex flex-col items-center justify-center mb-3'>
                            <label for="name">Niveau</label>
                            <input class="form-input" type='text' name='level'
                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->level }}'>
                        </div>
                        <div class='flex flex-col items-center justify-center mb-3'>
                            <label for="name">Experience</label>
                            <input class="form-input" type='text' name='experience'
                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->experience }}'>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center w-full">
                    {{-- stats --}}
                    <div class="flex flex-col items-center justify-around bg-orange-50 rounded-md p-5">
                        <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                            <span class="font-black text-white">FORCE</span>
                            <input class='w-1/2 form-input' type='text' name='strength'
                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->strength }}'>
                        </div>
                        <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                            <span class="font-black text-white">DEXTERITE</span>
                            <input class='w-1/2 form-input' type='text' name='dexterity'
                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->dexterity }}'>
                        </div>
                        <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                            <span class="font-black text-white">CONSTITUTION</span>
                            <input class='w-1/2 form-input' type='text' name='constitution'
                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->constitution }}'>
                        </div>
                        <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                            <span class="font-black text-white">INTELLIGENCE</span>
                            <input class='w-1/2 form-input' type='text' name='intelligence'
                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->intelligence }}'>
                        </div>
                        <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                            <span class="font-black text-white">SAGESSE</span>
                            <input class='w-1/2 form-input' type='text' name='wisdom'
                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->wisdom }}'>
                        </div>
                        <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                            <span class="font-black text-white">CHARISME</span>
                            <input class='w-1/2 form-input' type='text' name='charisma'
                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->charisma }}'>
                        </div>
                    </div>
                    {{-- stats end --}}
                    <div class="flex flex-col justify-center align-center">
                        <div class="flex justify-around items-center">
                            {{-- maitrise inspi --}}
                            <div class="flex flex-col justify-center items-center bg-orange-50 rounded-md p-5 m-3">
                                <div class="flex flex-col justify-center items-center">
                                    <span class="font-black uppercase text-black">Maitrise</span>
                                    <input class='w-1/2 form-input' type='text' name='proficiency'
                                        value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->proficiency }}'>
                                </div>
                                <div class="flex flex-col justify-center items-center">
                                    <span class="font-black uppercase text-black">Initiative</span>
                                    <input class='w-1/2 form-input' type='text' name='initiative'
                                        value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->initiative }}'>
                                </div>
                                <div class="flex flex-col justify-center items-center">
                                    <span class="font-black uppercase text-black">Inspiration</span>
                                    <input class='w-1/2 form-input' type='text' name='inspiration'
                                        value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->inspiration }}'>
                                </div>
                            </div>
                            {{-- maitrise inspi end --}}
                            {{-- CA PV vitesse --}}
                            <div class="flex flex-col items-center justify-center bg-orange-50 rounded-md p-5 m-3">
                                <div class="flex justify-around">
                                    <div class="flex flex-col items-center justify-center m-3">
                                        <i class="fa-solid fa-heart fa-5x text-red-800 relative"></i>
                                        <input class='w-10 form-input absolute z-10' type='text' name='current_hitpoints'
                                            value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->current_hitpoints }}'>
                                    </div>
                                    <div class="flex flex-col items-center justify-center m-3">
                                        <i class="fa-solid fa-shield fa-5x text-gray-800 relative"></i>
                                        <input class='w-10 form-input absolute z-10' type='text' name='armor_class'
                                            value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->armor_class }}'>
                                        </p>
                                    </div>
                                    <div class="flex flex-col items-center justify-center m-3">
                                        <span class="text-red-900 text-lg font-bold uppercase">Déplacements</span>
                                        <ul class='list-disc'>
                                            <li class='text-xl text-black'>
                                                <span class="font-bold text-sm">Marche :</span>
                                                <input class='w-1/2 form-input' type='text' name='speed'
                                                    value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->speed }}'>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center justify-center w-full">
                                    <input class='w-1/2 form-input' type='text' name='hit_dice'
                                        value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->hit_dice }}'>
                                    <span class="text-red-900 text-md font-bold uppercase text-center py-2">JdS contre la
                                        mort</span>
                                    <div class="flex items-center justify-around w-full">
                                        <span class="font-bold text-sm">Succès</span>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-around w-full">
                                        <span class="font-bold text-sm">Echecs</span>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                value="option1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- ca pv vitesse end --}}
                        </div>
                        {{-- save start --}}
                        <div class="flex flex-col items-center justify-center bg-orange-50 rounded-md p-5 m-3">
                            <span class="text-red-900 text-lg font-bold uppercase">Jets de sauvegarde</span>
                            <ul class='w-full'>
                                <li class='text-xl text-black text-center'>
                                    <p class="text-2xl"><span class="font-bold text-sm">FORCE :</span>
                                        <input class='w-1/12 form-input' type='text' name='save_strength'
                                            value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->save_strength }}'>
                                    </p>
                                </li>
                                <li class='text-xl text-black text-center'>
                                    <p class="text-2xl"><span class="font-bold text-sm">DEXTERITE :</span>
                                        <input class='w-1/12 form-input' type='text' name='save_dexterity'
                                            value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->save_dexterity }}'>
                                    </p>
                                </li>
                                <li class='text-xl text-black text-center'>
                                    <p class="text-2xl"><span class="font-bold text-sm">CONSTITUTION :</span>
                                        <input class='w-1/12 form-input' type='text' name='save_constitution'
                                            value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->save_constitution }}'>
                                    </p>
                                </li>
                                <li class='text-xl text-black text-center'>
                                    <p class="text-2xl"><span class="font-bold text-sm">INTELLIGENCE :</span>
                                        <input class='w-1/12 form-input' type='text' name='save_intelligence'
                                            value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->save_intelligence }}'>
                                    </p>
                                </li>
                                <li class='text-xl text-black text-center'>
                                    <p class="text-2xl"><span class="font-bold text-sm">SAGESSE :</span>
                                        <input class='w-1/12 form-input' type='text' name='save_wisdom'
                                            value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->save_wisdom }}'>
                                    </p>
                                </li>
                                <li class='text-xl text-black text-center'>
                                    <p class="text-2xl"><span class="font-bold text-sm">CHARISME :</span>
                                        <input class='w-1/12 form-input' type='text' name='save_charisma'
                                            value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->save_charisma }}'>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        {{-- save end --}}
                        {{-- skills start --}}
                        <div class="flex flex-col items-center justify-center bg-orange-50 rounded-md p-5 m-3">
                            <span class="text-red-900 text-lg font-bold uppercase">Compétences</span>
                            <div class="flex justify-around items-center p-5 w-full">
                                <ul class='w-1/2 flex flex-col items-center justify-center'>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">ACROBATICS :</span>
                                            <input class='w-1/4 form-input' type='text' name='acrobatics'
                                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->acrobatics }}'>
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">ANIMAL HANDLING :</span>
                                            <input class='w-1/4 form-input' type='text' name='animal_handling'
                                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->animal_handling }}'>
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">ARCANA :</span>
                                            <input class='w-1/4 form-input' type='text' name='arcana'
                                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->arcana }}'>
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">ATHLETICS :</span>
                                            <input class='w-1/4 form-input' type='text' name='athletics'
                                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->athletics }}'>
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">DECEPTION :</span>
                                            <input class='w-1/4 form-input' type='text' name='deception'
                                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->deception }}'>
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">HISTORY :</span>
                                            <input class='w-1/4 form-input' type='text' name='history'
                                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->history }}'>
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">INVESTIGATION :</span>
                                            <input class='w-1/4 form-input' type='text' name='investigation'
                                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->investigation }}'>
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">INSIGHT :</span>
                                            <input class='w-1/4 form-input' type='text' name='insight'
                                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->insight }}'>
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">INTIMIDATION :</span>
                                            <input class='w-1/4 form-input' type='text' name='intimidation'
                                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->intimidation }}'>
                                        </p>
                                    </li>
                                </ul>
                                <ul class='w-1/2 flex flex-col items-center justify-center'>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">MEDICINE :</span>
                                            <input class='w-1/4 form-input' type='text' name='medicine'
                                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->medicine }}'>
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">NATURE :</span>
                                            <input class='w-1/4 form-input' type='text' name='nature'
                                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->nature }}'>
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">PERCEPTION :</span>
                                            <input class='w-1/4 form-input' type='text' name='perception'
                                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->perception }}'>
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">PERFORMANCE :</span>
                                            <input class='w-1/4 form-input' type='text' name='performance'
                                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->performance }}'>
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">PERSUASION :</span>
                                            <input class='w-1/4 form-input' type='text' name='persuasion'
                                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->persuasion }}'>
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">RELIGION :</span>
                                            <input class='w-1/4 form-input' type='text' name='religion'
                                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->religion }}'>
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">SLEIGHT OF HAND :</span>
                                            <input class='w-1/4 form-input' type='text' name='sleight_of_hand'
                                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->sleight_of_hand }}'>
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">STEALTH :</span>
                                            <input class='w-1/4 form-input' type='text' name='stealth'
                                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->stealth }}'>
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">SURVIVAL :</span>
                                            <input class='w-1/4 form-input' type='text' name='survival'
                                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->survival }}'>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- skills end --}}
                    </div>
                    {{-- caractere start --}}
                    <div class="flex flex-col justify-around">
                        <div
                            class="flex flex-col items-center justify-center my-3 text-center bg-orange-50 rounded-md p-5 w-full">
                            <p class='text-md text-black w-full'><span
                                    class="text-red-900 text-lg font-bold uppercase">Lanceur de sort :
                                </span><br>
                            <div class="flex flex-col items-center justify-center">
                                <span class="font-bold text-sm">Classe :</span>
                                <input class='w-1/2 form-input' type='text' name='spellcasting_class'
                                    value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->spellcasting_class }}'>
                                <span class="font-bold text-sm">Caract. d'incantation :</span>
                                <input class='w-1/2 form-input' type='text' name='spellcasting_ability'
                                    value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->spellcasting_ability }}'>
                                <span class="font-bold text-sm">DD des sorts :</span>
                                <input class='w-1/2 form-input' type='number' name='spell_save_dc'
                                    value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->spell_save_dc }}'>
                                <span class="font-bold text-sm">Bonus au toucher :</span>
                                <input class='w-1/2 form-input' type='number' name='spell_attack_bonus'
                                    value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->spell_attack_bonus }}'>
                            </div>
                            </p>
                        </div>
                        <div class="flex items-center justify-center my-3 text-center bg-orange-50 rounded-md p-5 w-full">
                            <p class='text-md text-black w-full'><span
                                    class="text-red-900 text-lg font-bold uppercase">Historique :
                                </span><br>
                                <input type="text" name='background'
                                    value="{{ \Illuminate\Support\Facades\Auth::user()->fiche->background }}">
                            </p>
                        </div>
                        <div class="flex items-center justify-center my-3 text-center bg-orange-50 rounded-md p-5 w-full">
                            <p class='text-md text-black w-full'><span
                                    class="text-red-900 text-lg font-bold uppercase">Traits de
                                    personnalité :
                                </span><br>
                                <textarea name="personality_traits" class='form-input w-full text-start'
                                    rows="8">{{ \Illuminate\Support\Facades\Auth::user()->fiche->personality_traits }}</textarea>
                            </p>
                        </div>
                        <div class="flex items-center justify-center my-3 text-center bg-orange-50 rounded-md p-5 w-full">
                            <p class='text-md text-black w-full'><span
                                    class="text-red-900 text-lg font-bold uppercase">Idéaux :
                                </span><br>
                                <textarea name="personality_ideals" class='form-input w-full text-start'
                                    rows="8">{{ \Illuminate\Support\Facades\Auth::user()->fiche->personality_ideals }}</textarea>
                            </p>
                        </div>
                        <div class="flex items-center justify-center my-3 text-center bg-orange-50 rounded-md p-5 w-full">
                            <p class='text-md text-black w-full'><span
                                    class="text-red-900 text-lg font-bold uppercase">Liens :
                                </span><br>
                                <textarea name="personality_bonds" class='form-input w-full text-start'
                                    rows="8">{{ \Illuminate\Support\Facades\Auth::user()->fiche->personality_bonds }}</textarea>
                            </p>
                        </div>
                        <div class="flex items-center justify-center my-3 text-center bg-orange-50 rounded-md p-5 w-full">
                            <p class='text-md text-black w-full'><span
                                    class="text-red-900 text-lg font-bold uppercase">Défauts :
                                </span><br>
                                <textarea name="personality_flaws" class='form-input w-full text-start'
                                    rows="8">{{ \Illuminate\Support\Facades\Auth::user()->fiche->personality_flaws }}</textarea>
                            </p>
                        </div>
                    </div>
                    {{-- caractere end --}}
                </div>


                <div class="flex flex-col items-center justify-center my-3 bg-orange-50 rounded-md p-5 w-full">
                    <span class="text-red-900 text-xl font-bold uppercase my-3">Armes :
                    </span>
                    <div class="flex items-center justify-center w-full">
                        <div class="flex flex-col items-center justify-center w-1/5">
                            <label for="weapon1">Nom</label>
                            <input class='w-full form-input' type='text' name='weapon1'
                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->weapon1 }}'>
                        </div>

                        <div class="flex flex-col items-center justify-center w-1/5">
                            <label for="bonus_attack1">Bonus ATK</label>
                            <input class='w-full form-input' type='text' name='bonus_attack1'
                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->bonus_attack1 }}'>
                        </div>
                        <div class="flex flex-col items-center justify-center w-1/5">
                            <label for="bonus_damage1">Bonus DMG</label>
                            <input class='w-full form-input' type='text' name='bonus_damage1'
                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->bonus_damage1 }}'>
                        </div>
                        <div class="flex flex-col items-center justify-center w-1/5">
                            <label for="type_damage1">Type de DMG</label>
                            <input class='w-full form-input' type='text' name='type_damage1'
                                value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->type_damage1 }}'>
                        </div>

                    </div>
                </div>
                <div class="flex items-center justify-center my-3 bg-orange-50 rounded-md p-5 w-full">
                    <p class='text-md text-black w-full'><span class="text-red-900 text-lg font-bold uppercase">Capacités
                            et
                            traits :
                        </span><br>
                        <textarea name="features_traits" class='form-input w-full text-start'
                            rows="5">{{ \Illuminate\Support\Facades\Auth::user()->fiche->features_traits }}</textarea>
                    </p>
                </div>


                <div class="flex items-center justify-center w-full">
                    <div class="flex flex-col items-center justify-center my-3 bg-orange-50 rounded-md p-5 w-1/2">
                        <p class='text-md text-black w-full'><span class="text-red-900 text-lg font-bold uppercase">Autres
                                maîtrises
                                et langues :
                            </span><br>
                            <textarea name="profiencies_languages" class='form-input w-full text-start'
                                rows="15">{{ \Illuminate\Support\Facades\Auth::user()->fiche->profiencies_languages }}</textarea>
                        </p>
                    </div>
                    <div class="flex flex-col items-center justify-center m-3 bg-orange-50 rounded-md p-5 w-1/2">
                        <p class='text-md text-black'><span class="text-red-900 text-lg font-bold uppercase">Inventaire :
                            </span>
                        <div class="flex items-center justify-around w-full my-3">
                            <div class="flex flex-col items-center justify-center p-10 bg-gray-200 rounded-full">
                                <input class='w-16 form-input absolute z-10' type='text' name='platinum_coins'
                                    value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->platinum_coins }}'>
                            </div>
                            <div class="flex flex-col items-center justify-center p-10 bg-yellow-400 rounded-full">
                                <input class='w-16 form-input absolute z-10' type='text' name='gold_coins'
                                    value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->gold_coins }}'>
                            </div>
                            <div class="flex flex-col items-center justify-center p-10 bg-gray-400 rounded-full">
                                <input class='w-16 form-input absolute z-10' type='text' name='silver_coins'
                                    value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->silver_coins }}'>
                            </div>
                            <div class="flex flex-col items-center justify-center p-10 bg-yellow-700 rounded-full">
                                <input class='w-16 form-input absolute z-10' type='text' name='copper_coins'
                                    value='{{ \Illuminate\Support\Facades\Auth::user()->fiche->copper_coins }}'>
                            </div>
                        </div>
                        <textarea name="inventory" class='form-input w-full text-start'
                            rows="8">{{ \Illuminate\Support\Facades\Auth::user()->fiche->inventory }}</textarea>
                    </div>
                </div>
            </div>
            {{-- make a button to save all the data --}}
            <div class="flex items-center justify-center my-3">
                <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-full">
                    Enregistrer
                </button>
        </form>
        </div>
        {{-- make a button to save all the data --}}
        {{-- change text of this view into input --}}
    </section>
@endsection
