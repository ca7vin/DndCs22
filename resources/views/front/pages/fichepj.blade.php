@extends('front/layouts/app')
@section('content')
    @include('front/partials/navbar')
    <section class='w-full my-5'>
        {{-- <img src="{{ asset('img/corner-br.png') }}" alt="" class="cornerDeco absolute right-1 bottom-2">
        <img src="{{ asset('img/corner-bl.png') }}" alt="" class="cornerDeco absolute left-1 bottom-2">
        <img src="{{ asset('img/corner-tl.png') }}" alt="" class="cornerDeco absolute left-1 top-2">
        <img src="{{ asset('img/corner-tr.png') }}" alt="" class="cornerDeco absolute right-1 top-2"> --}}
        <div class="flex flex-col justify-center items-center p-10 m-10 borderFiche relative overflow-hidden">
            <img class='absolute w-full dragonL' src="{{ asset('img/dragonL.png') }}" alt="">
            <img class='absolute w-full dragonR' src="{{ asset('img/dragonR.png') }}" alt="">
            <img class='absolute w-1/4 dragonHead' src="{{ asset('img/dragonHead.png') }}" alt="">
            <h2 class="text-3xl text-center text-red-900 font-bold uppercase mb-10 dividerTitle p-2">Fiche Personnage</h2>
            <div class="flex justify-around items-center w-full m-20 p-5 relative">
                <img class='absolute dividerDivT w-1/2' src="{{ asset('img/divider3.png') }}" alt="">
                <img class='absolute dividerDivB w-1/2' src="{{ asset('img/divider2.png') }}" alt="">
                <div class="flex flex-col items-center justify-center w-1/5 ml-64">
                    <p class="text-lg text-red-900 font-bold uppercase">Sora Nemesis </p>
                    <p class="text-black text-md font-bold capitalize">Drakéide</p>       
                    <p class="text-black text-md font-bold capitalize">Chaotique bon</p>       
                </div>
                <div class="flex flex-col items-center justify-center w-1/5">
                    <img class='w-1/2' src="{{ asset('img/token-annekat.png') }}" alt="">   
                    
                </div>
                <div class="flex flex-col items-center justify-center w-1/5 mr-64">
                    <p class="text-red-900 text-lg font-bold uppercase">Barbare</p>
                    <p class="text-black text-md font-bold capitalize">niveau : <span class="text-2xl">2</span> </p>       
                    <p class="text-black text-md font-bold capitalize">experience : <span class="text-2xl">300</span> </p>       
                </div>
            </div>
            <div class="flex justify-center items-center w-full">
                {{-- stats --}}
                <div class="flex flex-col items-center justify-around bg-orange-50 rounded-md p-5">
                    <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                        <span class="font-black text-white">FORCE</span>
                        <p class="text-white text-4xl"></p>
                    </div>
                    <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                        <span class="font-black text-white">DEXTERITE</span>
                        <p class="text-white text-3xl"></p>
                    </div>
                    <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                        <span class="font-black text-white">CONSTITUTION</span>
                        <p class="text-white text-3xl"></p>
                    </div>
                    <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                        <span class="font-black text-white">INTELLIGENCE</span>
                        <p class="text-white text-3xl"></p>
                    </div>
                    <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                        <span class="font-black text-white">SAGESSE</span>
                        <p class="text-white text-3xl"></p>
                    </div>
                    <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                        <span class="font-black text-white">CHARISME</span>
                        <p class="text-white text-3xl"></p>
                    </div>
                </div>
                {{-- stats end --}}
                <div class="flex flex-col justify-center align-center">
                    <div class="flex justify-around items-center">
                        {{-- maitrise + inspi --}}
                        <div class="flex flex-col justify-center items-center bg-orange-50 rounded-md p-5 m-3">
                            <div class="flex flex-col justify-center items-center">
                                <span class="font-black uppercase text-black">Maitrise</span>
                                <p class="text-black text-2xl mb-3">+2</p>
                            </div>
                            <div class="flex flex-col justify-center items-center">
                                <span class="font-black uppercase text-black">Initiative</span>
                                <p class="text-black text-2xl mb-3">+2</p>
                            </div>
                            <div class="flex flex-col justify-center items-center">
                                <span class="font-black uppercase text-black">Inspiration</span>
                                <p class="text-black text-2xl">+0</p>
                            </div>
                        </div>
                        {{-- maitrise + inspi end --}}
                        {{-- CA PV vitesse --}}
                        <div class="flex flex-col items-center justify-center bg-orange-50 rounded-md p-5 m-3">
                            <div class="flex justify-around">
                                <div class="flex flex-col items-center justify-center m-3">
                                    <i class="fa-solid fa-heart fa-5x text-red-800 relative"></i>
                                    <p class='text-2xl text-white absolute z-10'>10</p>
                                </div>
                                <div class="flex flex-col items-center justify-center m-3">
                                    <i class="fa-solid fa-shield fa-5x text-gray-800 relative"></i>
                                    <p class='text-2xl text-white absolute z-10'>18</p>
                                </div>
                                <div class="flex flex-col items-center justify-center m-3">
                                    <span class="text-red-900 text-lg font-bold uppercase">Déplacements</span>
                                    <ul class='list-disc'>
                                        <li class='text-xl text-black'>
                                            <span class="font-bold text-sm">Marche :</span> 6 cases
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex flex-col items-center justify-center w-full">
                                <p class="text-md"><span class="font-bold">Dés de vie :</span> 1d8</p>
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
                                <p class="text-2xl"><span class="font-bold text-sm">FORCE :</span> +1</p>
                            </li>
                            <li class='text-xl text-black text-center'>
                                <p class="text-2xl"><span class="font-bold text-sm">DEXTERITE :</span> +1</p>
                            </li>
                            <li class='text-xl text-black text-center'>
                                <p class="text-2xl"><span class="font-bold text-sm">CONSTITUTION :</span> +1</p>
                            </li>
                            <li class='text-xl text-black text-center'>
                                <p class="text-2xl"><span class="font-bold text-sm">INTELLIGENCE :</span> +1</p>
                            </li>
                            <li class='text-xl text-black text-center'>
                                <p class="text-2xl"><span class="font-bold text-sm">SAGESSE :</span> +1</p>
                            </li>
                            <li class='text-xl text-black text-center'>
                                <p class="text-2xl"><span class="font-bold text-sm">CHARISME :</span> +1</p>
                            </li>
                        </ul>
                    </div>
                    {{-- save end --}}
                    {{-- skills start --}}
                    <div class="flex flex-col items-center justify-center bg-orange-50 rounded-md p-5 m-3">
                        <span class="text-red-900 text-lg font-bold uppercase">Compétences</span>
                        <div class="flex justify-around items-center p-5">
                            <ul class='w-1/2 mr-10'>
                                <li class='text-xl text-black text-center'>
                                    <p class="text-2xl"><span class="font-bold text-sm">FORCE :</span> +1</p>
                                </li>
                                <li class='text-xl text-black text-center'>
                                    <p class="text-2xl"><span class="font-bold text-sm">DEXTERITE :</span> +1</p>
                                </li>
                                <li class='text-xl text-black text-center'>
                                    <p class="text-2xl"><span class="font-bold text-sm">CONSTITUTION :</span> +1</p>
                                </li>
                                <li class='text-xl text-black text-center'>
                                    <p class="text-2xl"><span class="font-bold text-sm">INTELLIGENCE :</span> +1</p>
                                </li>
                                <li class='text-xl text-black text-center'>
                                    <p class="text-2xl"><span class="font-bold text-sm">SAGESSE :</span> +1</p>
                                </li>
                                <li class='text-xl text-black text-center'>
                                    <p class="text-2xl"><span class="font-bold text-sm">CHARISME :</span> +1</p>
                                </li>
                            </ul>
                            <ul class='w-1/2'>
                                <li class='text-xl text-black text-center'>
                                    <p class="text-2xl"><span class="font-bold text-sm">FORCE :</span> +1</p>
                                </li>
                                <li class='text-xl text-black text-center'>
                                    <p class="text-2xl"><span class="font-bold text-sm">DEXTERITE :</span> +1</p>
                                </li>
                                <li class='text-xl text-black text-center'>
                                    <p class="text-2xl"><span class="font-bold text-sm">CONSTITUTION :</span> +1</p>
                                </li>
                                <li class='text-xl text-black text-center'>
                                    <p class="text-2xl"><span class="font-bold text-sm">INTELLIGENCE :</span> +1</p>
                                </li>
                                <li class='text-xl text-black text-center'>
                                    <p class="text-2xl"><span class="font-bold text-sm">SAGESSE :</span> +1</p>
                                </li>
                                <li class='text-xl text-black text-center'>
                                    <p class="text-2xl"><span class="font-bold text-sm">CHARISME :</span> +1</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- skills end --}}
                </div>
                {{-- caractere start --}}
                <div class="flex flex-col justify-around">
                    <div class="flex items-center justify-center my-3 bg-orange-50 rounded-md p-5 ">
                        <p class='text-md text-black'><span class="text-red-900 text-lg font-bold uppercase">Traits de
                                personnalité : </span><br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores accusamus nam vel
                            voluptatibus voluptas hic, neque quae, nobis quod quos reiciendis minus excepturi, doloribus at
                            odit culpa quo aliquid reprehenderit assumenda! Quasi a incidunt sit aliquid, voluptate ab
                            aspernatur quaerat.</p>
                    </div>
                    <div class="flex items-center justify-center my-3 bg-orange-50 rounded-md p-5 ">
                        <p class='text-md text-black'><span class="text-red-900 text-lg font-bold uppercase">Idéaux :
                            </span><br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores accusamus nam vel
                            voluptatibus voluptas hic, neque quae, nobis quod quos reiciendis minus excepturi, doloribus at
                            odit culpa quo aliquid reprehenderit assumenda! Quasi a incidunt sit aliquid, voluptate ab
                            aspernatur quaerat.</p>
                    </div>
                    <div class="flex items-center justify-center my-3 bg-orange-50 rounded-md p-5 ">
                        <p class='text-md text-black'><span class="text-red-900 text-lg font-bold uppercase">Liens :
                            </span><br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores accusamus nam vel
                            voluptatibus voluptas hic, neque quae, nobis quod quos reiciendis minus excepturi, doloribus at
                            odit culpa quo aliquid reprehenderit assumenda! Quasi a incidunt sit aliquid, voluptate ab
                            aspernatur quaerat.</p>
                    </div>
                    <div class="flex items-center justify-center my-3 bg-orange-50 rounded-md p-5 ">
                        <p class='text-md text-black'><span class="text-red-900 text-lg font-bold uppercase">Défauts :
                            </span><br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores accusamus nam vel
                            voluptatibus voluptas hic, neque quae, nobis quod quos reiciendis minus excepturi, doloribus at
                            odit culpa quo aliquid reprehenderit assumenda! Quasi a incidunt sit aliquid, voluptate ab
                            aspernatur quaerat.</p>
                    </div>
                </div>
                {{-- caractere end --}}
            </div>
            <div class="flex items-center justify-center my-3 bg-orange-50 rounded-md p-5">
                <p class='text-md text-black'><span class="text-red-900 text-lg font-bold uppercase">Capacités et traits :
                    </span><br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores accusamus nam vel
                    voluptatibus voluptas hic, neque quae, nobis quod quos reiciendis minus excepturi, doloribus at
                    odit culpa quo aliquid reprehenderit assumenda! Quasi a incidunt sit aliquid, voluptate ab
                    aspernatur quaerat.</p>
            </div>
            <div class="flex items-center justify-center">
                <div class="flex flex-col items-center justify-center my-3 bg-orange-50 rounded-md p-5 w-1/2">
                    <p class='text-md text-black'><span class="text-red-900 text-lg font-bold uppercase">Autres maîtrises
                            et langues :
                        </span><br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores accusamus nam vel
                        voluptatibus voluptas hic, neque quae, nobis quod quos reiciendis minus excepturi, doloribus at
                        odit culpa quo aliquid reprehenderit assumenda! Quasi a incidunt sit aliquid, voluptate ab
                        aspernatur quaerat.</p>
                </div>
                <div class="flex flex-col items-center justify-center m-3 bg-orange-50 rounded-md p-5 w-1/2">
                    <p class='text-md text-black'><span class="text-red-900 text-lg font-bold uppercase">Equipement :
                        </span>
                    <div class="flex items-center justify-around w-full my-3">
                        <div class="flex flex-col items-center justify-center p-3 bg-gray-200 rounded-full">
                            <span class='text-2xl'>200</span>
                        </div>
                        <div class="flex flex-col items-center justify-center p-3 bg-yellow-400 rounded-full">
                            <span class='text-2xl'>200</span>
                        </div>
                        <div class="flex flex-col items-center justify-center p-3 bg-gray-400 rounded-full">
                            <span class='text-2xl'>200</span>
                        </div>
                        <div class="flex flex-col items-center justify-center p-3 bg-yellow-700 rounded-full">
                            <span class='text-2xl'>200</span>
                        </div>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit quia, quaerat fuga fugit ut
                        necessitatibus dolor soluta minima itaque rem, optio rerum et animi a dolorum ab possimus quod
                        delectus deserunt voluptas maiores libero natus asperiores. Animi repellat, deserunt corporis maxime
                        dolorum ducimus tenetur doloremque aperiam, id quis sunt. Optio?</p>
                </div>
            </div>
        </div>
    </section>
    @include('front/partials/footer')

@endsection
