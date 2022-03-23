@extends('front/layouts/app')
@section('content')
    @include('front/partials/navbar')
    <section id="grimoireMagicien" class="mx-10 my-5 flex flex-col items-center justify-center">
        <h1 class="text-2xl mb-5 capitalize text-center font-bold">Liste de sort : Magicien</h1>
    @foreach ($magicienSorts as $sort)
        <div class="w-1/2">
            <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('/img/card-left.jpg')" title="Woman holding a mug">
            </div>
            <div class="bg-white border-t border-b p-4 flex flex-col justify-between leading-normal">
              <div class="mb-2">
                <div class="text-gray-900 font-bold text-xl mb-2">{{ $sort->sort }}</div>
                <div class="text-gray-900 font-bold text-base mb-2"><span class="font-bold">Niveau</span> : {{ $sort->niveau }}</div>
                <p class="text-gray-700 text-base"><span class="font-bold">Description</span> : "{{ $sort->description }}"</p>
              </div>
              <div class="flex items-center">
                <div class="text-md">
                  <p class="text-gray-700 leading-none mb-2"><span class="font-bold">Portée</span> : {{ $sort->portee }}</p>
                  <p class="text-gray-700"><span class="font-bold">Concentration</span> : {{ $sort->concentration }}</p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </section>
@endsection
