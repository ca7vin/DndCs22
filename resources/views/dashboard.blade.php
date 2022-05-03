<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-red-900 leading-tight">
            Bienvenue {{ Auth::user()->fiche->namePerso }}
        </h2>
    </x-slot>

    <div class="p-12 relative w-full">
        <img src="{{ asset('img/corner-br.png') }}" alt="" class="cornerDeco absolute right-1 bottom-2">
        <img src="{{ asset('img/corner-bl.png') }}" alt="" class="cornerDeco absolute left-1 bottom-2">
        <img src="{{ asset('img/corner-tl.png') }}" alt="" class="cornerDeco absolute left-1 top-2">
        <img src="{{ asset('img/corner-tr.png') }}" alt="" class="cornerDeco absolute right-1 top-2">
        <div class="w-full ">
            <div class="flex flex-col items-center justify-center w-full">
                <div class="p-6 text-center bg-yellow-600 rounded-lg w-1/2">
                    <p class="text-yellow-300">Vous êtes connecté !</p>
                </div>
                <h2 class="font-semibold text-2xl m-5 uppercase text-center text-red-900">
                    Résumés
                </h2>
                <div class="cards w-1/2 shadow-lg mx-3  bg-gray-900">
                    <img class="w-full" src="{{ asset('img/seance1.jpg') }}" alt="Sunset in the mountains">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-white">#1 - Embuscade en fôret</div>
                        <p class="text-gray-300 text-base">
                            Après avoir été réuni à la taverne de Phandaline, un nain Cherchepierre vous informe qu'il aimerait
                            vous confier une importante mission. Afin de voir votre valeur, le nain vous demande d'aller
                            explorer au Nord du village. Il semblerait que les voyageurs et autres caravanes subissent
                            régulièrement des attaques embusquées. Cherchepierre aimerait que vous éradiquiez ces viles
                            créatures et vous demande de ramener la tête de leur chef, un Gobelours, pour preuve de vos actions.
                        </p>
                    </div>
                    <div class="flex items-center justify-center px-6 pt-4 pb-2">
                        <button class="bg-white rounded p-2 text-gray-900 w-full mb-3"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
