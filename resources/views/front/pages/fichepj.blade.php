@extends('front/layouts/app')
@section('content')
    @include('layouts.navigation')
    <section class='w-full my-5'>
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
                {{-- make a button to edit this page --}}
                        <a href="{{ route('fiche.edit', Auth::user()->fiche->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-3 px-5 rounded-full">
                            Modifier
                        </a>
                <div class="flex justify-around items-center w-full m-20 p-5 relative">
                    <img class='absolute dividerDivT w-1/2' src="{{ asset('img/divider3.png') }}" alt="">
                    <img class='absolute dividerDivB w-1/2' src="{{ asset('img/divider2.png') }}" alt="">
                    <div class="flex flex-col items-center justify-center w-1/5 ml-64">
                        <p class='text-2xl font-bold uppercase text-red-900'>{{ \Illuminate\Support\Facades\Auth::user()->fiche->name }}</p>
                        <p>Race : {{ \Illuminate\Support\Facades\Auth::user()->fiche->race }}</p>
                        <p>Alignement : {{ \Illuminate\Support\Facades\Auth::user()->fiche->alignment }}</p>
                    </div>
                    <div class="flex flex-col items-center justify-center w-1/5">
                        <img class='w-1/2'
                            src="{{ asset('img/' . \Illuminate\Support\Facades\Auth::user()->fiche->avatar) }}" alt="">
                    </div>
                    <div class="flex flex-col items-center justify-center w-1/5 mr-64">
                        <p class='text-2xl font-bold uppercase text-red-900'>{{ \Illuminate\Support\Facades\Auth::user()->fiche->class }}</p>
                        <p>Niveau : {{ \Illuminate\Support\Facades\Auth::user()->fiche->level }}</p>
                        <p>Expérience : {{ \Illuminate\Support\Facades\Auth::user()->fiche->experience }}</p>
                    </div>
                </div>
                <div class="flex justify-center items-center w-full">
                    {{-- stats --}}
                    <div class="flex flex-col items-center justify-around bg-orange-50 rounded-md p-5">
                        <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                            <span class="font-black text-white">FORCE</span>
                            <p class='text-white text-2xl'>
                                {{ \Illuminate\Support\Facades\Auth::user()->fiche->strength }}</p>
                        </div>
                        <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                            <span class="font-black text-white">DEXTERITE</span>
                            <p class='text-white text-2xl'>
                                {{ \Illuminate\Support\Facades\Auth::user()->fiche->dexterity }}</p>

                        </div>
                        <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                            <span class="font-black text-white">CONSTITUTION</span>
                            <p class='text-white text-2xl'>
                                {{ \Illuminate\Support\Facades\Auth::user()->fiche->constitution }}</p>
                        </div>
                        <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                            <span class="font-black text-white">INTELLIGENCE</span>
                            <p class='text-white text-2xl'>
                                {{ \Illuminate\Support\Facades\Auth::user()->fiche->intelligence }}</p>
                        </div>
                        <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                            <span class="font-black text-white">SAGESSE</span>
                            <p class='text-white text-2xl'>
                                {{ \Illuminate\Support\Facades\Auth::user()->fiche->wisdom }}</p>
                        </div>
                        <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                            <span class="font-black text-white">CHARISME</span>
                            <p class='text-white text-2xl'>
                                {{ \Illuminate\Support\Facades\Auth::user()->fiche->charisma }}</p>
                        </div>
                    </div>
                    {{-- stats end --}}
                    <div class="flex flex-col justify-center align-center">
                        <div class="flex justify-around items-center">
                            {{-- maitrise inspi --}}
                            <div class="flex flex-col justify-center items-center bg-orange-50 rounded-md p-5 m-3">
                                <div class="flex flex-col justify-center items-center">
                                    <span class="font-black uppercase text-black">Maitrise</span>
                                    <p class='text-2xl'>
                                        {{ \Illuminate\Support\Facades\Auth::user()->fiche->proficiency }}</p>
                                </div>
                                <div class="flex flex-col justify-center items-center">
                                    <span class="font-black uppercase text-black">Initiative</span>
                                    <p class='text-2xl'>
                                        {{ \Illuminate\Support\Facades\Auth::user()->fiche->initiative }}</p>
                                </div>
                                <div class="flex flex-col justify-center items-center">
                                    <span class="font-black uppercase text-black">Inspiration</span>
                                    <p class='text-2xl'>
                                        {{ \Illuminate\Support\Facades\Auth::user()->fiche->inspiration }}</p>
                                </div>
                            </div>
                            {{-- maitrise inspi end --}}
                            {{-- CA PV vitesse --}}
                            <div class="flex flex-col items-center justify-center bg-orange-50 rounded-md p-5 m-3">
                                <div class="flex justify-around">
                                    <div class="flex flex-col items-center justify-center m-3">
                                        <i class="fa-solid fa-heart fa-5x text-red-800 relative"></i>
                                        <p class='text-2xl text-white absolute z-10'>
                                            {{ \Illuminate\Support\Facades\Auth::user()->fiche->current_hitpoints }}</p>
                                    </div>
                                    <div class="flex flex-col items-center justify-center m-3">
                                        <i class="fa-solid fa-shield fa-5x text-gray-800 relative"></i>
                                        <p class='text-2xl text-white absolute z-10'>
                                            {{ \Illuminate\Support\Facades\Auth::user()->fiche->armor_class }}</p>
                                        </p>
                                    </div>
                                    <div class="flex flex-col items-center justify-center m-3">
                                        <span class="text-red-900 text-lg font-bold uppercase">Déplacements</span>
                                        <ul class='list-disc'>
                                            <li class='text-xl text-black'>
                                                <span class="font-bold text-sm">Marche :
                                                    {{ \Illuminate\Support\Facades\Auth::user()->fiche->speed }} m</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flex flex-col items-center justify-center w-full">
                                    <p class='text-xl'>{{ \Illuminate\Support\Facades\Auth::user()->fiche->hit_dice }}
                                    </p>
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
                                    <p class="text-xl"><span class="font-bold text-sm">FORCE :</span>
                                         {{ \Illuminate\Support\Facades\Auth::user()->fiche->save_strength }}
                                    </p>
                                </li>
                                <li class='text-xl text-black text-center'>
                                    <p class="text-2xl"><span class="font-bold text-sm">DEXTERITE :</span>
                                         {{ \Illuminate\Support\Facades\Auth::user()->fiche->save_dexterity }}
                                    </p>
                                </li>
                                <li class='text-xl text-black text-center'>
                                    <p class="text-2xl"><span class="font-bold text-sm">CONSTITUTION :</span>
                                         {{ \Illuminate\Support\Facades\Auth::user()->fiche->save_constitution }}
                                    </p>
                                </li>
                                <li class='text-xl text-black text-center'>
                                    <p class="text-2xl"><span class="font-bold text-sm">INTELLIGENCE :</span>
                                         {{ \Illuminate\Support\Facades\Auth::user()->fiche->save_intelligence }}
                                    </p>
                                </li>
                                <li class='text-xl text-black text-center'>
                                    <p class="text-2xl"><span class="font-bold text-sm">SAGESSE :</span>
                                         {{ \Illuminate\Support\Facades\Auth::user()->fiche->save_wisdom }}
                                    </p>
                                </li>
                                <li class='text-xl text-black text-center'>
                                    <p class="text-2xl"><span class="font-bold text-sm">CHARISME :</span>
                                         {{ \Illuminate\Support\Facades\Auth::user()->fiche->save_charisma }}
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
                                             {{ \Illuminate\Support\Facades\Auth::user()->fiche->acrobatics }}
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">ANIMAL HANDLING :</span>
                                             {{ \Illuminate\Support\Facades\Auth::user()->fiche->animal_handling }}
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">ARCANA :</span>
                                             {{ \Illuminate\Support\Facades\Auth::user()->fiche->arcana }}
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">ATHLETICS :</span>
                                             {{ \Illuminate\Support\Facades\Auth::user()->fiche->athletics }}
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">DECEPTION :</span>
                                             {{ \Illuminate\Support\Facades\Auth::user()->fiche->deception }}
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">HISTORY :</span>
                                             {{ \Illuminate\Support\Facades\Auth::user()->fiche->history }}
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">INVESTIGATION :</span>
                                             {{ \Illuminate\Support\Facades\Auth::user()->fiche->investigation }}
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">INSIGHT :</span>
                                             {{ \Illuminate\Support\Facades\Auth::user()->fiche->insight }}
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">INTIMIDATION :</span>
                                             {{ \Illuminate\Support\Facades\Auth::user()->fiche->intimidation }}
                                        </p>
                                    </li>
                                </ul>
                                <ul class='w-1/2 flex flex-col items-center justify-center'>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">MEDICINE :</span>
                                             {{ \Illuminate\Support\Facades\Auth::user()->fiche->medicine }}
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">NATURE :</span>
                                             {{ \Illuminate\Support\Facades\Auth::user()->fiche->nature }}
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">PERCEPTION :</span>
                                             {{ \Illuminate\Support\Facades\Auth::user()->fiche->perception }}
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">PERFORMANCE :</span>
                                             {{ \Illuminate\Support\Facades\Auth::user()->fiche->performance }} </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">PERSUASION :</span>
                                             {{ \Illuminate\Support\Facades\Auth::user()->fiche->persuasion }}
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">RELIGION :</span>
                                             {{ \Illuminate\Support\Facades\Auth::user()->fiche->religion }}
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">SLEIGHT OF HAND :</span>
                                             {{ \Illuminate\Support\Facades\Auth::user()->fiche->sleight_of_hand }}
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">STEALTH :</span>
                                             {{ \Illuminate\Support\Facades\Auth::user()->fiche->stealth }}
                                        </p>
                                    </li>
                                    <li class='text-md text-black w-full text-center'>
                                        <p class="text-2xl"><span class="font-bold text-sm">SURVIVAL :</span>
                                             {{ \Illuminate\Support\Facades\Auth::user()->fiche->survival }}
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- skills end --}}
                    </div>
                    {{-- caractere start --}}
                    <div class="flex flex-col justify-around">
                        <div class="flex flex-col items-center justify-center my-3 text-center bg-orange-50 rounded-md p-5 w-full">
                            <p class='text-md text-black w-full'><span
                                    class="text-red-900 text-lg font-bold uppercase">Lanceur de sort :
                                </span><br>
                            </p>
                            <ul>
                                <li><strong>Classe</strong> : {{ \Illuminate\Support\Facades\Auth::user()->fiche->spellcasting_class }}</li>
                                <li><strong>Caract. d'incantation</strong> : {{ \Illuminate\Support\Facades\Auth::user()->fiche->spellcasting_ability }}</li>
                                <li><strong>DD des sorts</strong> : {{ \Illuminate\Support\Facades\Auth::user()->fiche->spell_save_dc }}</li>
                                <li><strong>Bonus au toucher</strong> :  {{ \Illuminate\Support\Facades\Auth::user()->fiche->spell_attack_bonus }}</li>
                            </ul>
                        </div>
                        <div class="flex items-center justify-center my-3 text-center bg-orange-50 rounded-md p-5 w-full">
                            <p class='text-md text-black w-full'><span
                                    class="text-red-900 text-lg font-bold uppercase">Historique :
                                </span><br>
                                {{ \Illuminate\Support\Facades\Auth::user()->fiche->background }}
                            </p>
                        </div>
                        <div class="flex items-center justify-center my-3 text-center bg-orange-50 rounded-md p-5 w-full">
                            <p class='text-md text-black w-full'><span
                                    class="text-red-900 text-lg font-bold uppercase">Traits de
                                    personnalité :
                                </span><br>
                                {{ \Illuminate\Support\Facades\Auth::user()->fiche->personality_traits }}
                            </p>
                        </div>
                        <div class="flex items-center justify-center my-3 text-center bg-orange-50 rounded-md p-5 w-full">
                            <p class='text-md text-black w-full'><span
                                    class="text-red-900 text-lg font-bold uppercase">Idéaux :
                                </span><br>
                                {{ \Illuminate\Support\Facades\Auth::user()->fiche->personality_ideals }}
                            </p>
                        </div>
                        <div class="flex items-center justify-center my-3 text-center bg-orange-50 rounded-md p-5 w-full">
                            <p class='text-md text-black w-full'><span
                                    class="text-red-900 text-lg font-bold uppercase">Liens :
                                </span><br>
                                {{ \Illuminate\Support\Facades\Auth::user()->fiche->personality_bonds }}
                            </p>
                        </div>
                        <div class="flex items-center justify-center my-3 text-center bg-orange-50 rounded-md p-5 w-full">
                            <p class='text-md text-black w-full'><span
                                    class="text-red-900 text-lg font-bold uppercase">Défauts :
                                </span><br>
                                {{ \Illuminate\Support\Facades\Auth::user()->fiche->personality_flaws }}
                            </p>
                        </div>
                    </div>
                    {{-- caractere end --}}
                </div>


                <div class="flex flex-col items-center justify-center my-3 bg-orange-50 rounded-md p-5 w-full">
                    <span class="text-red-900 text-xl font-bold uppercase my-3">Armes :
                    </span>
                    <div class="flex items-center justify-around w-full p-3">
                        <p class="text-lg ">
                            {{ \Illuminate\Support\Facades\Auth::user()->fiche->weapon1 }}
                        </p>
                        <p class="text-lg ">
                            {{ \Illuminate\Support\Facades\Auth::user()->fiche->bonus_attack1 }} (toucher)
                        </p>
                        <p class="text-lg ">
                            {{ \Illuminate\Support\Facades\Auth::user()->fiche->bonus_damage1 }} (dégâts)
                        </p>
                        <p class="text-lg ">
                            {{ \Illuminate\Support\Facades\Auth::user()->fiche->type_damage1 }}
                        </p>
                    </div>
                </div>
                <div class="flex items-center justify-center my-3 bg-orange-50 rounded-md p-5 w-full">
                    <p class='text-md text-black w-full'><span class="text-red-900 text-lg font-bold uppercase">Capacités
                            et
                            traits :
                        </span><br>
                        {{ \Illuminate\Support\Facades\Auth::user()->fiche->features_traits }}
                    </p>
                </div>


                <div class="flex items-center justify-center w-full">
                    <div class="flex flex-col items-center justify-center my-3 bg-orange-50 rounded-md p-5 w-1/2">
                        <p class='text-md text-black w-full'><span class="text-red-900 text-lg font-bold uppercase">Autres
                                maîtrises
                                et langues :
                            </span><br>
                            {{ \Illuminate\Support\Facades\Auth::user()->fiche->profiencies_languages }}
                        </p>
                    </div>
                    <div class="flex flex-col items-center justify-center m-3 bg-orange-50 rounded-md p-5 w-1/2">
                        <p class='text-md text-black'><span class="text-red-900 text-lg font-bold uppercase">Inventaire :
                            </span>
                        <div class="flex items-center justify-around w-full my-3">
                            <div class="flex flex-col items-center justify-center p-10 bg-gray-200 rounded-full coin shadow-lg">
                                <p class='text-2xl'>{{ \Illuminate\Support\Facades\Auth::user()->fiche->platinum_coins }}</p>
                            </div>
                            <div class="flex flex-col items-center justify-center p-10 bg-yellow-400 rounded-full coin shadow-lg">
                                <p class='text-2xl'>{{ \Illuminate\Support\Facades\Auth::user()->fiche->gold_coins }}</p>
                            </div>
                            <div class="flex flex-col items-center justify-center p-10 bg-gray-400 rounded-full coin shadow-lg">
                                <p class='text-2xl'>{{ \Illuminate\Support\Facades\Auth::user()->fiche->silver_coins }}</p>
                            </div>
                            <div class="flex flex-col items-center justify-center p-10 bg-yellow-700 rounded-full coin shadow-lg">
                                <p class='text-2xl'>{{ \Illuminate\Support\Facades\Auth::user()->fiche->copper_coins }}</p>
                            </div>
                        </div>
                        <p>{{ \Illuminate\Support\Facades\Auth::user()->fiche->inventory }}</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- make a button to save all the data --}}
        {{-- change text of this view into input --}}
    </section>
@endsection
