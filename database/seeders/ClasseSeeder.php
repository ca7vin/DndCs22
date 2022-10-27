<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            'className' => 'Barbare',
        ]);
        DB::table('classes')->insert([
            'className' => 'Barde',
        ]);
        DB::table('classes')->insert([
            'className' => 'Clerc',
        ]);
        DB::table('classes')->insert([
            'className' => 'Druide',
        ]);
        DB::table('classes')->insert([
            'className' => 'Ensorceleur',
        ]);
        DB::table('classes')->insert([
            'className' => 'Guerrier',
        ]);
        DB::table('classes')->insert([
            'className' => 'Magicien',
        ]);
        DB::table('classes')->insert([
            'className' => 'Moine',
        ]);
        DB::table('classes')->insert([
            'className' => 'Occultiste',
        ]);
        DB::table('classes')->insert([
            'className' => 'Paladin',
        ]);
        DB::table('classes')->insert([
            'className' => 'Rôdeur',
        ]);
        DB::table('classes')->insert([
            'className' => 'Roublard',
        ]);
        //
    }
}
