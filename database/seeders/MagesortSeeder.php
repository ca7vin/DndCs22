<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MagesortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // LEVEL 0
        DB::table('magesorts')->insert([
            'sort' => 'Amis',
            'niveau' => '0',
            'ecole' => 'Enchantement',
            'incantation' => '1 action',
            'concentration' => 'oui',
            'description' => 'Le lanceur obtient l\'avantage aux jets de Charisme contre une créature choisie qui ne lui est pas hostile.',
            'portee' => 'Personnelle',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Aspersion d\'acide',
            'niveau' => '0',
            'ecole' => 'Invocation',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => '1 ou 2 créatures dans un rayon de 1,50 m doivent réussir un JdS de Dex. ou subir 1d6 dégâts d\'acide (dégâts/niv).',
            'portee' => '18m',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Bouffée de poison',
            'niveau' => '0',
            'ecole' => 'Invocation',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'La cible doit réussir un JdS de Con. ou subir 1d12 dégâts de poison (dégâts/niv).',
            'portee' => '3m',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Contact glacial',
            'niveau' => '0',
            'ecole' => 'Nécromancie',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'Si l\'attaque avec un sort touche, inflige 1d8 dégâts nécrotiques (dégâts/niv) et la cible ne peut récupérer ses pv de suite.',
            'portee' => '36m',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Contrôle des flammes',
            'niveau' => '0',
            'ecole' => 'Transmutation',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'Contrôle les feux non magiques pour les allumer, éteindre, faire grossir, faire apparaître des formes simples, etc.',
            'portee' => '18m',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Coup au but',
            'niveau' => '0',
            'ecole' => 'Divination',
            'incantation' => '1 action',
            'concentration' => 'oui',
            'description' => 'Le lanceur obtient l\'avantage à son prochain jet d\'attaque contre une cible.',
            'portee' => '9m',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Coup de tonnerre',
            'niveau' => '0',
            'ecole' => 'Evocation',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'Les créatures dans un rayon de 1,50 m doivent réussir un JdS de Con. ou subir 1d6 dégâts tonnerre (dégâts/niv).',
            'portee' => '1,50m',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Embrasement',
            'niveau' => '0',
            'ecole' => 'Invocation',
            'incantation' => '1 action',
            'concentration' => 'oui',
            'description' => 'Les créatures dans un cube de 1,50 m doivent réussir un JdS de Dex. ou subir 1d8 dégâts de feu (dégâts/niv).',
            'portee' => '18m',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Esprit désorienté',
            'niveau' => '0',
            'ecole' => 'Enchantement',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'La cible doit réussir un JdS d\'Int. ou subir 1d6 dégâts psychiques et soustraire 1d4 à son prochain JdS (dégâts/niv).',
            'portee' => '18m',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Explosion de lames',
            'niveau' => '0',
            'ecole' => 'Invocation',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'Les créatures dans un rayon de 1,50 m doivent réussir un JdS de Dex. ou subir 1d6 de force (dégâts/niv).',
            'portee' => 'Personnelle (rayon de 1,50 mètre)',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Façonnage de l\'eau',
            'niveau' => '0',
            'ecole' => 'Transmutation',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'Contrôle l\'eau pour obtenir divers effets mineurs comme changer sa couleur, la faire geler, changer le sens du courant, etc.',
            'portee' => '9m',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Façonnage de la terre',
            'niveau' => '0',
            'ecole' => 'Transmutation',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'Contrôle la terre où la pierre pour la creuser, créer des formes, la transformer en terrain difficile, etc.',
            'portee' => '9m',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Fouet foudroyant',
            'niveau' => '0',
            'ecole' => 'Evocation',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'La cible doit réussir un JdS de For. ou subir 1d8 dégâts de foudre (dégâts/niv) et être poussée de 3 m.',
            'portee' => 'Personnelle (rayon de 4,50 mètres)',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Gelure',
            'niveau' => '0',
            'ecole' => 'Evocation',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'La cible doit réussir un JdS de Con. ou subir 1d6 dégâts de froid et avoir un désavantage à l\'attaque (dégâts/niv)',
            'portee' => '18m',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Glas',
            'niveau' => '0',
            'ecole' => 'Nécromancie',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'La cible doit réussir un JdS de Sag. ou subir 1d8 ou 1d12 dégâts nécrotiques (dégâts/niv).',
            'portee' => '18m',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Illusion mineure',
            'niveau' => '0',
            'ecole' => 'Illusion',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'Crée l\'illusion d\'un son ou d\'une image immobile pas plus grande qu\'un cube de 1,50 m.',
            'portee' => '9m',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Infestation',
            'niveau' => '0',
            'ecole' => 'Invocation',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'La cible doit réussir un JdS de Con. ou subir 1d6 dégâts de poison et se déplacer de 1,50 m au hasard (dégâts/niv).',
            'portee' => '9m',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Lame aux flammes vertes',
            'niveau' => '0',
            'ecole' => 'Evocation',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'Si une attaque avec une arme touche, inflige aussi des dégâts de feu égaux au Mod.Carac.Inc à une autre créature (dégâts/niv).',
            'portee' => 'Personnelle (rayon de 1,50 mètre)',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Lame tonnante',
            'niveau' => '0',
            'ecole' => 'Evocation',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'Si une attaque avec une arme touche, inflige 1d8 dégâts de tonnerre si la cible bouge (dégâts/niv).',
            'portee' => 'Personnelle (rayon de 1,50 mètre)',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Lumière',
            'niveau' => '0',
            'ecole' => 'Evocation',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'Fait qu\'un objet émette une lumière vive sur 6 m et une lumière faible sur 6 m supplémentaires.',
            'portee' => 'Contact',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Lumières dansantes',
            'niveau' => '0',
            'ecole' => 'Evocation',
            'incantation' => '1 action',
            'concentration' => 'oui',
            'description' => 'Crée jusqu\'à 4 lumières de la taille d\'une torche qui émettent une lumière faible sur 3 m et qu\'on peut déplacer jusqu\'à 18 m.',
            'portee' => '36m',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Main de mage',
            'niveau' => '0',
            'ecole' => 'Invocation',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'Crée une main spectrale qui peut dans un rayon de 9 m manipuler un objet, ouvrir une porte, saisir un objet, etc.',
            'portee' => '9m',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Message',
            'niveau' => '0',
            'ecole' => 'Transmutation',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'Le lanceur murmure un message à une créature à 36 m qui sera la seule à l\'entendre. Elle pourra répondre de la même façon.',
            'portee' => '36m',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Poigne électrique',
            'niveau' => '0',
            'ecole' => 'Evocation',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'Si l\'attaque avec un sort touche, inflige 1d8 dégâts de foudre (dégâts/niv) et la cible ne peut pas prendre de réaction.',
            'portee' => 'Contact',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Prestidigitation',
            'niveau' => '0',
            'ecole' => 'Transmutation',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'Tour de magie (effet sensoriel, allume une torche, nettoie un objet, réchauffe, fait apparaître un symbole, crée une babiole).',
            'portee' => '3m',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Protection contre les armes',
            'niveau' => '0',
            'ecole' => 'Abjuration',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'Le lanceur obtient la résistance contre les dégâts contondants, tranchants et perforants infligés par des attaques avec arme.',
            'portee' => 'Personnelle',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Rayon de givre',
            'niveau' => '0',
            'ecole' => 'Evocation',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'Si l\'attaque avec un sort touche, inflige 1d8 dégâts de froid (dégâts/niv) et la vitesse de la cible est réduite de 3 m.',
            'portee' => '18m',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Réparation',
            'niveau' => '0',
            'ecole' => 'Transmutation',
            'incantation' => '1 minute',
            'concentration' => 'non',
            'description' => 'Répare fissure, déchirure, fêlure d\'un objet (maillon de chaîne cassé, clé brisée, accroc sur un manteau, fuite d\'une gourde).',
            'portee' => 'Contact',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Saute de vent',
            'niveau' => '0',
            'ecole' => 'Transmutation',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'Contrôle l\'air afin de déplacer des objets ou des créatures (taille M max) ou de créer des effets sensoriels inoffensifs.',
            'portee' => '9m',
        ]);
        DB::table('magesorts')->insert([
            'sort' => 'Trait de feu',
            'niveau' => '0',
            'ecole' => 'Evocation',
            'incantation' => '1 action',
            'concentration' => 'non',
            'description' => 'Si l\'attaque avec un sort touche, inflige 1d10 dégâts de feu (dégâts/niv). Un objet peut prendre feu.',
            'portee' => '36m',
        ]);
        //
    }
}
