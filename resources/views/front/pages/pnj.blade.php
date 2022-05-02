@extends('front/layouts/app')
@section('content')
    @include('layouts.navigation')
    <section id="pnjs" class="mx-10 my-5 flex flex-col items-center justify-center">
        <h1 class="text-red-900 text-3xl mb-5 capitalize text-center font-bold">P.N.J</h1>
        @foreach ($pnjs as $pnj)
            <div class="flex w-2/3 mb-10 h-60">
                <div class="h-48 lg:h-auto lg:w-64 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                    style="background-image: url({{ asset('img/' . $pnj->image) }})" title="Woman holding a mug">
                </div>
                <div
                    class="bg-gray-900 rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <div class="text-white font-bold text-xl mb-8">{{ $pnj->prenom }} {{ $pnj->nom }}</div>
                        <p class="text-gray-300 text-base">{{ $pnj->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endsection
