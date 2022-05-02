<div class='flex w-full justify-around items-start bg-black p-3 borderNavT relative z-10'>
    <div class='w-1/3 flex flex-col items-center justify-start'>
        <span class="text-white uppercase">Réseaux sociaux</span>
        <div class="flex items-center justify-around p-5">
            <a class='text-white flex flex-col items-center justify-center m-3 hover:text-yellow-400' href="">
                <i class="fa-brands fa-discord fa-2x mb-2"></i>
                <span class="uppercase font-bold text-sm">Discord</span>
            </a>
            <a class='text-white flex flex-col items-center justify-center hover:text-yellow-400' href="">
                <i class="fa-brands fa-facebook fa-2x mb-2"></i>
                <span class="uppercase font-bold text-sm">Facebook</span>
            </a>
        </div>
    </div>
    <div class='w-1/3 flex flex-col justify-around items-center'>
        <span class="text-white uppercase">Navigation</span>
        <ul class='flex flex-col justify-around items-center'>
            <li><a href="{{ Route('home') }}" class="text-white text-md hover:text-yellow-400">Home</a></li>
            <li><a href="{{ Route('pnj') }}" class="text-white text-md hover:text-yellow-400">PNJ</a></li>
            <li><a href="{{ Route('carte') }}" class="text-white text-md hover:text-yellow-400">Carte</a></li>
            {{-- <li><a href="{{ Route('monstres') }}" class="text-gray-300 text-xl">Monstres</a></li> --}}
            <li></li>
        </ul>
    </div>
    <div class='w-1/3 flex flex-col justify-center items-center h-fit'>
        <span class="text-white uppercase">Copyright</span>
        <div class="flex flex-col items-center justify-center p-5">
            <p class='text-white'>&copy; C. Van der Ghinst</p>
            <p class='text-white'>@ CodingSchool 22</p>
        </div>
    </div>
</div>
