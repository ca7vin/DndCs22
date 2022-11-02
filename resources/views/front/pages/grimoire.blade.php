@extends('front/layouts/app')
@section('content')
@include('front/partials/sidenav')
<section id='grimoire' class='home-section flex flex-col items-center w-full'>
  @include('layouts.navigation')
    <div class="flex flex-col items-center justify-center">
        @foreach ($spells as $spell)
        <div class="w-full card relative cardBg">
            <div class="border-b border-black lg:border-l-0 lg:border-black-400 flex flex-col justify-between leading-normal p-20">
              <div class="mb-8">
                <p class="text-sm text-black text-center font-black capitalize">
                  {{ $spell['school'] }}
                </p>
                <div class="text-red-800 font-black uppercase text-xl mb-2 spells text-center">{{ $spell['name'] }}</div>
                <p class="text-black text-base text-center">{{ $spell['desc'] }}</p>
                <p class="text-sm text-black flex items-center">
                </p>
              </div>
              <div class="flex items-center">
                <div class="text-sm">
                  <p class="text-black text-md"><span class="font-black">Durée d'incantation :&nbsp;</span> {{ $spell['casting_time'] }}</p>
                  <p class="text-black text-md leading-none spellClass"><span class="font-black">Classes :</span> {{ $spell['dnd_class'] }}</p>
                  <p class="text-black text-md"><span class="font-black">Niveau de sort :</span> {{ $spell['level'] }}</p>
                  <p class="text-black text-md leading-none"><span class="font-black">Portée :</span> {{ $spell['range'] }}</p>
                  <p class="text-black text-md font-black">{{ $spell['level'] }}</p>
                </div>
              </div>
                <img src="{{ asset('img/corner-br.png') }}" alt="" class="w-1/12 absolute right-1 bottom-2">
                <img src="{{ asset('img/corner-bl.png') }}" alt="" class="w-1/12 absolute left-1 bottom-2">
                <img src="{{ asset('img/corner-tl.png') }}" alt="" class="w-1/12 absolute left-1 top-2">
                <img src="{{ asset('img/corner-tr.png') }}" alt="" class="w-1/12 absolute right-1 top-2">
            </div>
          </div>

        @endforeach
    </div>
</section>

@endsection
