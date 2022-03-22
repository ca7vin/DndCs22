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
            'Joueur' => 'Aleksic',
            'Nom' => 'Shin',
            'Prenom' => 'Akiira',
            'Classe' => 'Guerrier',
            'Niveau' => '1',
            'Experience' => '25',
            'Race' => 'Humain',
        ]);
        DB::table('joueurs')->insert([
            'Joueur' => 'Nicola',
            'Nom' => 'Heratus',
            'Prenom' => 'Galados',
            'Classe' => 'Druide',
            'Niveau' => '1',
            'Experience' => '25',
            'Race' => 'Drakéide',
        ]);
        DB::table('joueurs')->insert([
            'Joueur' => 'Samy',
            'Nom' => 'Gebedo',
            'Prenom' => 'Gebedo',
            'Classe' => 'Magicien',
            'Niveau' => '1',
            'Experience' => '25',
            'Race' => 'Gnome des fôrets',
        ]);
        //
    }
}
