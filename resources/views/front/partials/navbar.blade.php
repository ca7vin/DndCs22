<nav class='flex justify-around items-center bg-gray-900 py-3'>
    <div class="flex items-center justify-around">
        <a href=""><i class="fa-solid text-white fa-dice-d20 fa-3x mr-3"></i></a>
        <span class="text-white text-2xl uppercase font-bold">Donjons & Dragons</span>
    </div>
    <ul class='flex justify-around items-center w-1/2'>
        <li><a href="{{ Route('home') }}" class="text-white text-xl">Home</a></li>
        <li><a href="{{ Route('pnj') }}" class="text-white text-xl">PNJ</a></li>
        <li><a href="{{ Route('grimoire') }}" class="text-white text-xl">Grimoire</a></li>
        <li><a href="{{ Route('monstres') }}" class="text-white text-xl">Bestiaire</a></li>
        <li><a href="{{ Route('carte') }}" class="text-white text-xl">Carte</a></li>
        {{-- <li><a href="{{ Route('monstres') }}" class="text-gray-300 text-xl">Monstres</a></li> --}}
        <li></li>
    </ul>
</nav>
