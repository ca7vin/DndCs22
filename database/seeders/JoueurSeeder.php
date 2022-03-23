<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JoueurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('joueurs')->insert([
            'Image' => 'token-alex.png',
            'Joueur' => 'Aleksic',
            'Nom' => 'Shin',
            'Prenom' => 'Akiira',
            'Classe' => 'Guerrier',
            'Niveau' => '1',
            'Experience' => '25',
            'Race' => 'Humain',
            'Grimoire' => 'grimoireMagicien',
        ]);
        DB::table('joueurs')->insert([
            'Image' => 'token-nico.png',
            'Joueur' => 'Nicola',
            'Nom' => 'Heratus',
            'Prenom' => 'Galados',
            'Classe' => 'Druide',
            'Niveau' => '1',
            'Experience' => '25',
            'Race' => 'Drakéide',
            'Grimoire' => 'grimoireMagicien',
        ]);
        DB::table('joueurs')->insert([
            'Image' => 'token-samy.png',
            'Joueur' => 'Samy',
            'Nom' => 'Gebedo',
            'Prenom' => 'Gebedo',
            'Classe' => 'Magicien',
            'Niveau' => '1',
            'Experience' => '25',
            'Race' => 'Gnome des fôrets',
            'Grimoire' => 'grimoireMagicien',
        ]);
        DB::table('joueurs')->insert([
            'Image' => 'token-annekat.png',
            'Joueur' => 'Annekat',
            'Nom' => 'Nemesis',
            'Prenom' => 'Sora',
            'Classe' => 'Barbare',
            'Niveau' => '1',
            'Experience' => '25',
            'Race' => 'Drakéide',
            'Grimoire' => 'grimoireMagicien',
        ]);
        DB::table('joueurs')->insert([
            'Image' => 'token-jade.png',
            'Joueur' => 'Jade',
            'Nom' => 'Caskwing',
            'Prenom' => 'Ennar',
            'Classe' => 'Clerc',
            'Niveau' => '1',
            'Experience' => '25',
            'Race' => 'Humain',
            'Grimoire' => 'grimoireMagicien',
        ]);
        DB::table('joueurs')->insert([
            'Image' => 'token-elliot.png',
            'Joueur' => 'Elliot',
            'Nom' => 'Tachedesang',
            'Prenom' => 'Argawaen',
            'Classe' => 'Guerrier',
            'Niveau' => '1',
            'Experience' => '25',
            'Race' => 'Elfe des bois',
            'Grimoire' => 'grimoireMagicien',
        ]);
        //
    }
}
