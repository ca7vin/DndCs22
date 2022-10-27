<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Mockery\Undefined;

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
        DB::table('pnjs')->insert([
            'image' => 'Goliath1.jpg',
            'prenom' => 'Elzuros',
            'nom' => 'Faragon',
            'age' => 99,
            'description' => 'Un être maléfique d\'une grande puissance. Rencontré pour la 1ère fois dans la grotte aux gobelins de Phandaline, ce vicieux personnage semble coopérer avec un Hobgobelin à des fins néfastes... Il a l\'air de tenir particulièrement à ses artefacts...',
        ]);
        DB::table('pnjs')->insert([
            'image' => 'Hobgobelin.jpg',
            'prenom' => 'Raki',
            'nom' => 'Nihilm',
            'age' => 99,
            'description' => 'Allié principal du Goliath, il dispose de la puissance de plusieurs tribsu gobelines lui ayant fait allégeance. Rencontré pour la 1ère fois dans la grotte aux gobelins de Phandaline...'
        ]);
        //
    }
}
