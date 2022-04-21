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
            'Niveau' => '2',
            'Experience' => '300',
            'Race' => 'Humain',
        ]);
        DB::table('joueurs')->insert([
            'Image' => 'token-nico.png',
            'Joueur' => 'Nicola',
            'Nom' => 'Heratus',
            'Prenom' => 'Galados',
            'Classe' => 'Druide',
            'Niveau' => '2',
            'Experience' => '300',
            'Race' => 'Drakéide',
        ]);
        DB::table('joueurs')->insert([
            'Image' => 'token-samy.png',
            'Joueur' => 'Samy',
            'Nom' => 'Gebedo',
            'Prenom' => 'Gebedo',
            'Classe' => 'Magicien',
            'Niveau' => '2',
            'Experience' => '300',
            'Race' => 'Gnome des fôrets',
        ]);
        DB::table('joueurs')->insert([
            'Image' => 'token-annekat.png',
            'Joueur' => 'Annekat',
            'Nom' => 'Nemesis',
            'Prenom' => 'Sora',
            'Classe' => 'Barbare',
            'Niveau' => '2',
            'Experience' => '300',
            'Race' => 'Drakéide',
        ]);
        DB::table('joueurs')->insert([
            'Image' => 'token-jade.png',
            'Joueur' => 'Jade',
            'Nom' => 'Caskwing',
            'Prenom' => 'Ennar',
            'Classe' => 'Clerc',
            'Niveau' => '2',
            'Experience' => '300',
            'Race' => 'Humain',
        ]);
        DB::table('joueurs')->insert([
            'Image' => 'token-marcyl.png',
            'Joueur' => 'Marcyl',
            'Nom' => '',
            'Prenom' => 'Byron',
            'Classe' => 'Occultiste',
            'Niveau' => '2',
            'Experience' => '300',
            'Race' => 'Tieffelin',
        ]);
        DB::table('joueurs')->insert([
            'Image' => 'token-alix.png',
            'Joueur' => 'Alix',
            'Nom' => '',
            'Prenom' => 'Inferno',
            'Classe' => 'Sorcière',
            'Niveau' => '2',
            'Experience' => '300',
            'Race' => 'Tieffelin',
        ]);
        //
    }
}
