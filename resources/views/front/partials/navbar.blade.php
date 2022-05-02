<nav class='flex justify-around items-center bg-black p-3 borderNavB relative z-10'>
    <div class="flex items-center justify-around mt-5">
        <a href="{{ Route('home') }}" class="flex items-center justify-around text-white hover:text-yellow-400">
            <i class="fa-solid fa-dice-d20 fa-3x mr-5"></i>
            <span class="text-2xl uppercase font-bold">Donjons & Dragons</span>
        </a>

    </div>
    <ul class='flex justify-around items-center w-1/2 mt-5'>
        <li><a href="{{ Route('home') }}" class="text-white text-xl hover:text-yellow-400">Home</a></li>
        {{-- <li><a href="{{ Route('pnj') }}" class="text-white text-xl hover:text-yellow-400">PNJ</a></li> --}}
        {{-- <li><a href="{{ Route('grimoire') }}" class="text-white text-xl hover:text-yellow-400">Grimoire</a></li> --}}
        {{-- <li><a href="{{ Route('monstres') }}" class="text-white text-xl hover:text-yellow-400">Bestiaire</a></li> --}}
        <li><a href="{{ Route('carte') }}" class="text-white text-xl hover:text-yellow-400">Univers</a></li>


        @if (Route::has('login'))
            <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">Membres <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg></button>

            <div id="dropdown"
                class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
                style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(583px, 681px);"
                data-popper-placement="bottom">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                    @auth
                    <li>
                        <a href="{{ url('/dashboard') }}"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="">
                            <form method='post' action="{{ route('logout') }}">
                                @csrf
                                <button class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Log out</button>
                            </form>
                        </a>
                    </li>
                    @else
                    <li><a href="{{ route('login') }}" class='block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'>Log in</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class='block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'>Register</a></li>
                        @endif 
                    @endauth
                </ul>
            </div>
        @endif
    </ul>
</nav>
