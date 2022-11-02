<div class="sidebar">
    <div class="logo-details">
        {{-- <i class="icon fa-solid text-gray-300 fa-dice-d20 fa-3x"></i> --}}
        <div class="logo_name text-center ml-5">Bestiaire</div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
        <li>
            <form action="{{ route('monstreSearch') }}" method="GET">
                @csrf
                <i class='bx bx-search'></i>
                <input onchange="document.getElementById('monsterSearch').submit()" type="text" id="monsterSearch"
                    placeholder="Recherche..." name="monsterSearch">
                <span class="tooltip">Recherche...</span>
            </form>
        </li>
    </ul>
</div>
