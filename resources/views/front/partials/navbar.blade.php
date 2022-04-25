<nav class='flex justify-around items-center bg-black p-3 borderNavB relative z-10'>
    <div class="flex items-center justify-around mt-5">
        <a href="{{ Route('home') }}" class="flex items-center justify-around text-white hover:text-yellow-400">
            <i class="fa-solid fa-dice-d20 fa-3x mr-5"></i>
            <span class="text-2xl uppercase font-bold">Donjons & Dragons</span>
        </a>
        
    </div>
    <ul class='flex justify-around items-center w-1/2 mt-5'>
        <li><a href="{{ Route('home') }}" class="text-white text-xl hover:text-yellow-400">Home</a></li>
        <li><a href="{{ Route('pnj') }}" class="text-white text-xl hover:text-yellow-400">PNJ</a></li>
        <li><a href="{{ Route('grimoire') }}" class="text-white text-xl hover:text-yellow-400">Grimoire</a></li>
        <li><a href="{{ Route('monstres') }}" class="text-white text-xl hover:text-yellow-400">Bestiaire</a></li>
        <li><a href="{{ Route('carte') }}" class="text-white text-xl hover:text-yellow-400">Carte</a></li>
        {{-- <li><a href="{{ Route('monstres') }}" class="text-gray-300 text-xl">Monstres</a></li> --}}
        <li></li>
    </ul>
</nav>
