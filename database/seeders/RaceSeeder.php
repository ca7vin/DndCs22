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
        ]);
        DB::table('races')->insert([
            'race' => 'Haut-Elfe',
        ]);
        DB::table('races')->insert([
            'race' => 'Elfe des Bois',
        ]);
        DB::table('races')->insert([
            'race' => 'Elfe Noir',
        ]);
        DB::table('races')->insert([
            'race' => 'Halfelin',
        ]);
        DB::table('races')->insert([
            'race' => 'Halfelin Pied-léger',
        ]);
        DB::table('races')->insert([
            'race' => 'Halfelin Robuste',
        ]);
        DB::table('races')->insert([
            'race' => 'Humain',
        ]);
        DB::table('races')->insert([
            'race' => 'Nain',
        ]);
        DB::table('races')->insert([
            'race' => 'Nain des montagnes',
        ]);
        DB::table('races')->insert([
            'race' => 'Nain des collines',
        ]);
        DB::table('races')->insert([
            'race' => 'Demi-elfe',
        ]);
        DB::table('races')->insert([
            'race' => 'Demi-orc',
        ]);
        DB::table('races')->insert([
            'race' => 'Drakéide',
        ]);
        DB::table('races')->insert([
            'race' => 'Gnome',
        ]);
        DB::table('races')->insert([
            'race' => 'Gnome des forêts',
        ]);
        DB::table('races')->insert([
            'race' => 'Gnome des roches',
        ]);
        DB::table('races')->insert([
            'race' => 'Tieffelin',
        ]);
        //
    }
}
