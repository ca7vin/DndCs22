<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('races')->insert([
            'race' => 'Elfe',
            'caract' => '+2 DEX',
            'vitesse' => '9m',
            'taille' => 'M',
            'maitrise' => 'perception',
            'features' => 'ascendance féerique, transe',
            'langue' => 'elfique',
            'sort' => '',
        ]);
        DB::table('races')->insert([
            'race' => 'Haut-Elfe',
            'caract' => '+1 INT',
            'vitesse' => '9m',
            'taille' => 'M',
            'maitrise' => 'épées et arcs',
            'features' => 'ascendance féerique, transe',
            'langue' => '1 de votre choix',
            'sort' => 'sort mineur parmi les sorts de magicien (INT)',
        ]);
        DB::table('races')->insert([
            'race' => 'Elfe des Bois',
            'caract' => '+1 SAG',
            'vitesse' => '10.5m',
            'taille' => 'M',
            'maitrise' => 'none',
            'features' => 'cachette naturelle',
            'langue' => 'elfique',
            'sort' => 'none',
        ]);
        DB::table('races')->insert([
            'race' => 'Elfe Noir',
            'caract' => '+1 CHA',
            'vitesse' => '9m',
            'taille' => 'M',
            'maitrise' => 'rapières, épées courtes et arbalètes de poing',
            'features' => 'Sensibilité au soleil, Magie Drow, Vision dans le noir supérieure',
            'langue' => 'none',
            'sort' => 'none',
        ]);
        //
    }
}
