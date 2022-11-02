@extends('front/layouts/app')
@section('content')
    @include('front/partials/sidenav3')
    <section id='items' class='home-section flex flex-col items-center w-full'>
        @include('layouts.navigation')
        <div class="flex flex-col items-center justify-center w-full">
            <div class="flex items-center justify-around mt-5 bg-orange-800 w-full py-2">
                <p class="px-10 text-md text-center bg-orange-800 text-yellow-400 py-1 w-full">{{ $count }} résultats
                    trouvés</p>
            </div>
            @foreach ($item as $item)
                <div class="w-full card cardBg relative">
                    <div
                        class=" border-b border-black lg:border-l-0 lg:border-black-400 p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-8 flex flex-col items-center justify-center">
                            <p class="text-sm text-black flex items-center font-black capitalize">
                                {{ $item['rarity'] }}
                            </p>
                            <div class="text-red-800 font-black uppercase text-xl items">{{ $item['name'] }}</div>
                            <div class="text-black capitalize text-sm mb-2"><span class="font-bold">Type :
                                </span>{{ $item['type'] }}</div>

                            <div class="flex flex-col items-center justify-center">
                                <div id="lineBetween">
                                </div>
                            </div>
                            <div class="flex flex-col items-center justify-center w-2/5 p-5">

                                <p class="text-center">{{ $item['desc'] }}</p>

                            </div>
                            <div class="text-black capitalize text-sm mb-2"><span class="font-bold">Lien nécessaire :
                                </span>{{ $item['requires_attunement'] ? 'Oui' : 'Non' }}</div>
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
    @include('front/partials/footer')
@endsection
