<section id='groupe' class='flex flex-col items-center justify-center m-5 mx-20 mb-10'>
    <h2 class="text-3xl font-bold uppercase mb-3">Groupe</h2>
    <div class="flex justify-around items-center">
        @foreach ($joueurs as $joueur)
        <div class="flex flex-col justify-center items-center mx-3">
            <a href=""><img class="mb-2" src="{{ asset('img/' . $joueur->Image) }}" alt=""></a>
            <span class='text-xl font-bold'>{{ $joueur->Prenom }} {{ $joueur->Nom }}</span>
            <span class='text-lg'>{{ $joueur->Classe }} {{ $joueur->Niveau }}</span>
        </div>
        @endforeach
    </div>
</section>
