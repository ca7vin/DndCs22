<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PnjSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pnjs')->insert([
            'image' => 'Forgepierre.jpg',
            'prenom' => 'Bran',
            'nom' => 'Forgepierre',
            'age' => '32',
            'description' => 'Bran est un marchand aguerri et aux humeurs changeantes. Il entretient une réelle fascination pour les objets magiques et historiques. Malgré son caractère changeant, il s\'agit d\'une personne amicale, à condition de ne pas essayer de la lui mettre à l\'envers...',
        ]);
        DB::table('pnjs')->insert([
            'image' => 'Godrick.jpg',
            'prenom' => 'Godrick',
            'nom' => 'Paulsen',
            'age' => '39',
            'description' => 'Godrick est l\'un des officiers de Phandaline. Militaire depuis ses 18 ans, il voue sa vie à la défense de son village et de ses habitants. Empathique et dévoué, il est prêt à donner sa vie pour Phandaline...',
        ]);
        //
    }
}
