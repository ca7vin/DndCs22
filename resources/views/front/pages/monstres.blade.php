@extends('front/layouts/app')
@section('content')
    @include('layouts.navigation')

    <section id='monstres' class='flex justify-center items-center w-full my-5'>
        <div class="flex flex-col items-center justify-center w-full">
            @foreach ($monstres as $monstre)
                <div class="w-full card cardBg relative">
                    <div
                        class=" border-b border-black lg:border-l-0 lg:border-black-400 p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8 flex flex-col items-center justify-center">
                            <p class="text-sm text-black flex items-center font-black capitalize">
                                {{ $monstre['type'] }} {{ $monstre['subtype'] }}
                            </p>
                            <div class="text-red-800 font-black uppercase text-xl spells">{{ $monstre['name'] }}</div>
                            <div class="text-black capitalize text-sm mb-2"><span class="font-bold">Challenge :
                                </span>{{ $monstre['challenge_rating'] }}</div>
                            <div class="flex items-center justify-around p-5 w-full">
                                <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                                    <span class="font-black text-white">FORCE</span>
                                    <p class="text-white text-4xl">{{ $monstre['strength'] }}</p>
                                </div>
                                <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                                    <span class="font-black text-white">DEXTERITE</span>
                                    <p class="text-white text-3xl">{{ $monstre['dexterity'] }}</p>
                                </div>
                                <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                                    <span class="font-black text-white">CONSTITUTION</span>
                                    <p class="text-white text-3xl">{{ $monstre['constitution'] }}</p>
                                </div>
                                <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                                    <span class="font-black text-white">INTELLIGENCE</span>
                                    <p class="text-white text-3xl">{{ $monstre['intelligence'] }}</p>
                                </div>
                                <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                                    <span class="font-black text-white">SAGESSE</span>
                                    <p class="text-white text-3xl">{{ $monstre['wisdom'] }}</p>
                                </div>
                                <div class="flex flex-col items-center justify-center charBg rounded w-full m-3 py-10">
                                    <span class="font-black text-white">CHARISME</span>
                                    <p class="text-white text-3xl">{{ $monstre['charisma'] }}</p>
                                </div>

                            </div>
                            <div class="flex p-5 w-2/3 justify-around border-t-2 border-b-2 border-gray-800 my-5">
                                <div class="flex flex-col items-center justify-center">
                                    <i class="fa-solid fa-heart fa-5x text-red-800 relative"></i>
                                    <p class='text-2xl text-white absolute z-10'>{{ $monstre['hit_points'] }}</p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <i class="fa-solid fa-shield fa-5x text-gray-800 relative"></i>
                                    <p class='text-2xl text-white absolute z-10'>{{ $monstre['armor_class'] }}</p>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <span class="text-red-900 text-lg font-bold uppercase">Déplacements :</span>
                                    <ul class='list-disc'>
                                        @if (array_key_exists('walk', $monstre['speed']))
                                            <li class='text-xl text-black'><span class="font-bold text-sm">Marche :
                                                </span>{{ floor($monstre['speed']['walk'] / 10) }} cases</li>
                                        @endif
                                        @if (array_key_exists('swim', $monstre['speed']))
                                            <li class='text-xl text-black'><span class="font-bold text-sm">Nage :
                                                </span>{{ floor($monstre['speed']['swim'] / 10) }} cases</li>
                                        @endif
                                        @if (array_key_exists('fly', $monstre['speed']))
                                            <li class='text-xl text-black'><span class="font-bold text-sm">Vol :
                                                </span>{{ floor($monstre['speed']['fly'] / 10) }} cases</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="flex items-start justify-around">
                                <div class="flex flex-col items-center justify-center w-2/5 p-5">
                                    <span class="text-red-900 text-lg font-bold uppercase mb-3">Actions :</span>
                                    <ul class='list-disc'>
                                        @if (is_array($monstre['actions']) || is_object($monstre['actions']))
                                            @foreach ($monstre['actions'] as $action)
                                                <li>
                                                    <span class="font-bold">{{ $action['name'] }}</span>
                                                    <p>{{ $action['desc'] }}</p>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <div id="lineBetween">
                                    </div>
                                </div>
                                <div class="flex flex-col items-center justify-center w-2/5 p-5">
                                    <span class="text-red-900 text-lg font-bold uppercase mb-3">Compétences spéciales
                                        :</span>
                                    <ul class='list-disc'>
                                        @if (is_array($monstre['special_abilities']) || is_object($monstre['special_abilities']))
                                            @foreach ($monstre['special_abilities'] as $special_abilitie)
                                                <li>
                                                    <span class="font-bold">{{ $special_abilitie['name'] }}</span>
                                                    <p>{{ $special_abilitie['desc'] }}</p>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('img/corner-br.png') }}" alt="" class="w-1/12 absolute right-1 bottom-2">
                    <img src="{{ asset('img/corner-bl.png') }}" alt="" class="w-1/12 absolute left-1 bottom-2">
                    <img src="{{ asset('img/corner-tl.png') }}" alt="" class="w-1/12 absolute left-1 top-2">
                    <img src="{{ asset('img/corner-tr.png') }}" alt="" class="w-1/12 absolute right-1 top-2">
                </div>
            @endforeach
        </div>
    </section>
    @include('front/partials/footer')
@endsection
