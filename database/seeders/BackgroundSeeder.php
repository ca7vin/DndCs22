<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BackgroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('backgrounds')->insert([
            'backgroundName' => 'Acolyte',
            'skillProfiency' => 'Religion, Intuition',
            'langueProfiencyUpgrade' => '2 de votre choix',
            'equipmentUpgrade' => 'un symbole sacré (cadeau reçu lorsque vous êtes entré en sacerdoce), un livre de prières, 5 bâtons d\'encens, des habits de cérémonie, des vêtements communs et une bourse contenant 15 po.',
            'backgroundSkill' => 'Abri du fidèle',
        ]);
        DB::table('backgrounds')->insert([
            'backgroundName' => 'Artisan de guilde',
            'skillProfiency' => 'Persuasion, Intuition',
            'langueProfiencyUpgrade' => '1 de votre choix',
            'equipmentUpgrade' => 'un jeu d\'outil d\'artisan (de votre choix), une lettre de recommandation de votre guilde, des vêtements de voyage et une bourse contenant 15 po.',
            'backgroundSkill' => 'Membre de guilde',
        ]);
        DB::table('backgrounds')->insert([
            'backgroundName' => 'Artiste',
            'skillProfiency' => 'Acrobatie, représentation',
            'langueProfiencyUpgrade' => 'kit de déguisement, un type d\'instrument de musique',
            'equipmentUpgrade' => 'un instrument de musique (de votre choix), un cadeau d\'un admirateur (une lettre d\'amour, une mèche de cheveux, une babiole), un costume et une bourse contenant 15 po.',
            'backgroundSkill' => 'A la demande du public',
        ]);
        DB::table('backgrounds')->insert([
            'backgroundName' => 'Charlatan',
            'skillProfiency' => 'Escamotage, tromperie',
            'langueProfiencyUpgrade' => 'kit de contrefaçon, kit de déguisement',
            'equipmentUpgrade' => 'des vêtements fins, un kit de déguisement, des outils d\'escroquerie de votre choix (10 bouteilles bouchonnées remplies d\'un liquide coloré, dés truqués, cartes marquées, fausse chevalière de duc, ...) et une bourse contenant 15 po.',
            'backgroundSkill' => 'Fausse identité',
        ]);
        DB::table('backgrounds')->insert([
            'backgroundName' => 'Criminel',
            'skillProfiency' => 'Discrétion, tromperie',
            'langueProfiencyUpgrade' => 'un type de jeu, outils de voleur',
            'equipmentUpgrade' => 'un pied-de-biche, des vêtements communs sombres avec une capuche et une bourse contenant 15 po.',
            'backgroundSkill' => 'Accointances avec la pègre',
        ]);
        DB::table('backgrounds')->insert([
            'backgroundName' => 'Enfant des rues',
            'skillProfiency' => 'Discrétion, escamotage',
            'langueProfiencyUpgrade' => 'kit de déguisement, outils de voleur',
            'equipmentUpgrade' => 'un petit couteau, une carte de la ville dans laquelle vous avez grandi, une souris domestiquée, un souvenir de vos parents, des vêtements communs et une bourse contenant 10 po.',
            'backgroundSkill' => 'Secrets de la ville',
        ]);
        DB::table('backgrounds')->insert([
            'backgroundName' => 'Ermite',
            'skillProfiency' => 'Médecine, religion',
            'langueProfiencyUpgrade' => 'kit d\'herboristerie + 1 langue de votre choix',
            'equipmentUpgrade' => 'un étui à parchemin remplis de notes sur vos études ou vos prières, une couverture pour l\'hiver, des vêtements communs, un kit d\'herboriste et 5 po.',
            'backgroundSkill' => 'Découverte',
        ]);
        DB::table('backgrounds')->insert([
            'backgroundName' => 'Héros du peuple',
            'skillProfiency' => 'Dressage, survie',
            'langueProfiencyUpgrade' => 'un type d\'outil d\'artisan, véhicules (terrestres)',
            'equipmentUpgrade' => 'un jeu d\'outil d\'artisan (de votre choix), une pelle, un pot en fer, des vêtements communs et une bourse contenant 10 po.',
            'backgroundSkill' => 'Hospitalité rustique',
        ]);
        DB::table('backgrounds')->insert([
            'backgroundName' => 'Marin',
            'skillProfiency' => 'Athlétisme, perception',
            'langueProfiencyUpgrade' => 'outils de navigateur, véhicules (aquatiques)',
            'equipmentUpgrade' => 'un cabillot d\'amarrage (gourdin), une corde en soie (15 m), un porte bonheur comme une patte de lapin ou une petite pierre avec un trou en son centre (vous pouvez sinon tirer aléatoirement une babiole), des vêtements communs et une bourse contenant 10 po.',
            'backgroundSkill' => 'Place à bord',
        ]);
        DB::table('backgrounds')->insert([
            'backgroundName' => 'Noble',
            'skillProfiency' => 'Histoire, persuasion',
            'langueProfiencyUpgrade' => '1 type de jeu + 1 langue de votre choix',
            'equipmentUpgrade' => 'des vêtements fins, une chevalière, une lettre de noblesse et une bourse contenant 25 po.',
            'backgroundSkill' => 'Apanage de la noblesse',
        ]);
        DB::table('backgrounds')->insert([
            'backgroundName' => 'Sage',
            'skillProfiency' => 'Arcanes, histoire',
            'langueProfiencyUpgrade' => '2 langues de votre choix',
            'equipmentUpgrade' => 'une bouteille d\'encre noire, une plume, un petit couteau, une lettre d\'un collègue mort posant une question à laquelle vous n\'avez pas encore été en mesure de répondre, des vêtements communs et une bourse contenant 10 po.',
            'backgroundSkill' => 'Chercheur',
        ]);
        DB::table('backgrounds')->insert([
            'backgroundName' => 'Sauvageon',
            'skillProfiency' => 'Athlétisme, survie',
            'langueProfiencyUpgrade' => '1 type d\instrument de musique + 1 langue de votre choix',
            'equipmentUpgrade' => 'un bâton, un piège à mâchoires, un trophée d\'animal que vous avez tué, des vêtements de voyage et une bourse contenant 10 po.',
            'backgroundSkill' => 'Eternel vagabond',
        ]);
        DB::table('backgrounds')->insert([
            'backgroundName' => 'Soldat',
            'skillProfiency' => 'Athlétisme, intimidation',
            'langueProfiencyUpgrade' => '1 type de jeu, véhicules (terrestre)',
            'equipmentUpgrade' => 'un insigne de grade, un trophée pris sur un ennemi mort (une dague, une lame brisée, un morceau de bannière), un jeu de dés en os ou un jeu de cartes, des vêtements communs et une bourse contenant 10 po.',
            'backgroundSkill' => 'Grade militaire',
        ]);
        //
    }
}
