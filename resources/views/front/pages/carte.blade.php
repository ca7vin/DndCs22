@extends('front/layouts/app')
@section('content')
    @include('front/partials/navbar')
    <section class='my-5 relative'>
        <img src="{{ asset('img/corner-br.png') }}" alt="" class="cornerDeco absolute right-1 bottom-2">
        <img src="{{ asset('img/corner-bl.png') }}" alt="" class="cornerDeco absolute left-1 bottom-2">
        <img src="{{ asset('img/corner-tl.png') }}" alt="" class="cornerDeco absolute left-1 top-2">
        <img src="{{ asset('img/corner-tr.png') }}" alt="" class="cornerDeco absolute right-1 top-2">
        <div class="flex justify-center items-center p-20">
            <div class="flex flex-col items-center justify-center p-5 w-1/2">
                <img class='' src="{{ asset('img/map.jpg') }}" alt="" onclick="window.open(this.src)">
            </div>
            <div class="flex flex-col items-start justify-center p-5 w-1/2 h-max">
            <h2 class="text-3xl text-center text-red-900 font-bold uppercase mb-10 dividerTitle p-2">Le monde de Faërun</h2>
                <p class='pr-10'>Le monde dans lequel sont situés les Royaumes Oubliés se nomme Toril. C'est la planète.
                    Toril est divisé en plusieurs continents. Le plus connu est Faerûn, mais il existe également ceux de
                    Kara-Tur (ambiance orientale, à l'est), Maztica (ambiance aztèque, à l'ouest) et Zakhara (ambiance 1001
                    nuits, au sud).
                    Le continent de Faerûn est à son tour divisé en plusieurs grandes régions :</p>
                <ul class='ml-5 mt-5 list-disc'>
                    <li>Le Nord et la Côte des Epées</li>
                    <li>Le Mitan</li>
                    <li>Les Terres Gelées</li>
                    <li>Turmish</li>
                    <li>Les terres de la Horde</li>
                    <li>Les terres de l'Intrigue</li>
                    <li>Les Vieux Empires</li>
                    <li>Le Sud Etincelant</li>
                </ul>
            </div>
        </div>
        @include('front/partials/quote2')
        <div class="flex flex-col justify-center items-center p-20">
            <div class="flex flex-col items-center justify-center p-5 h-max">
                <h1 class='text-red-800 text-3xl uppercase font-bold mb-5 p-2 dividerTitle'>Les plans d'existence</h1>
                <p class='pl-10 text-center'>Les plans d'existence sont différentes réalités liées les unes aux autres.
                    Exception faite de rares points de connexion, chaque plan constitue un univers doté de lois. Ils se
                    décomposent en un certain nombre de types : le plan matériel et ses reflets, les plans transitifs, les
                    plans intérieurs, les plans extérieurs et les demi-plans.</p>
                <h2 class="text-red-800 text-xl capitalize font-bold my-5 text-center w-full pl-10">Le plan matériel</h2>
                <p class='pl-10 text-center'>Le premier des plans est le monde dans lequel les humains et autres mortels
                    naissent et vivent, et qui n'est souvent connu que par le nom du monde. Ainsi, les sages de Faerûn
                    appellent leur monde Abeir-Toril. Mais quand on parle de plans, le monde correspond au terme de plan
                    matériel. À ses côtés s'étendent ensuite ses reflets, les plans parallèles : la Féerie et la Gisombre.
                    Les plans parallèles sont d'étranges copies du monde matériel. Le monde est fait de mers et de montagnes
                    et l'on retrouve ces espaces et reliefs dans les plans parallèles, mais il ne s'agit cependant pas de
                    reproductions exactes. Une cité humaine prospère du monde des mortels pourra ainsi donner un vallon
                    boisé en Féerie et une ruine hantée en Gisombre. Il semblerait que la version féerique d'un site du
                    monde naturel soit en fait un souvenir immaculé de ce qu'il était au tout début, tandis que la Gisombre
                    le représente tel qu'il sera quand son peuple aura disparu et qu'il n'en restera que des ruines.</p>
                <h2 class="text-red-800 text-xl capitalize font-bold my-5 text-center w-full pl-10">Les plans transitifs</h2>
                <p class='pl-10 text-center'>Le plan astral et le plan éthéré sont des plans appelés transitifs. Ils constituent le ciment qui confère à la cosmologie son intégrité. Grâce à eux, on peut passer d'un plan à un autre ou traverser le plan matériel à grande vitesse et en toute facilité. Essentiellement vides, la majorité de l'espace qui les compose n'est utilisé que pour accéder à d'autres plans. Sorts et pouvoirs magiques sont les moyens les plus courants visant à pénétrer dans les plans transitifs. Les portails et les vortex donnant dans les plans transitifs sont toutefois rares. Souvent, les portails ne font que courir à travers ces plans et mènent ailleurs. Ainsi, de nombreux portails magiques passent par le plan astral, mais peu de portails mènent directement au plan astral.</p>
                <h2 class="text-red-800 text-xl capitalize font-bold my-5 text-center w-full pl-10">Les plans intérieurs</h2>
                <p class='pl-10 text-center'>Les plans intérieurs sont des lieux de puissance brute et de purs éléments, d'états ultimes et de conditions extrêmes. Ce sont les fondations de l'univers et ils représentent la matière et l'énergie à leurs états primaires. Ils sont constitués de quatre plans élémentaires (Terre, Air, Feu et Eau) entourés du tourbillonnant Chaos élémentaire. Chaque plan intérieur est une région d'un environnement plus ou moins constant. Par exemple, le plan élémentaire de la Terre est principalement composé de matière solide, alors que les flammes règnent dans le plan élémentaire du Feu..</p>
                <h2 class="text-red-800 text-xl capitalize font-bold my-5 text-center w-full pl-10">Les plans extérieurs</h2>
                <p class='pl-10 text-center'>Si les plans intérieurs sont la matière et l'énergie brute qui font le multivers, les plans extérieurs en sont la direction, la pensée et le but. De même, bien des sages se réfèrent à ces plans sous les termes de plans divins ou plans spirituels, car les plans extérieurs sont mieux connus pour être la résidence des divinités. Les dieux peuvent fort bien vivre ailleurs, mais ils prospèrent en ces endroits. D'autres créatures y résident aussi ; certaines servent ces divinités et d'autres conservent férocement leur indépendance.
                Les plans extérieurs les plus connus sont un groupe de seize plans qui correspondent aux huit alignements (en excluant le neutre) et leur transition. Les plans contenant un élément du Bien dans leur nature sont les plans supérieurs, comme Céleste (LB). Les plans contenant un élément du Mal sont les plans inférieurs, comme les Neuf enfers (LM) ou les Abysses (CM).</p>
            </div>
            <div class="flex flex-col items-center justify-center p-5">
                <img class='' src="{{ asset('img/map_plans.jpg') }}" alt="" onclick="window.open(this.src)">
            </div>
        </div>

    </section>
    @include('front/partials/footer')

@endsection
