<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name" => "Anne-Catherine Colin",
            "background_id" => 1,
            "race_id" => 1,
            "classe_id" => 1,
            "email" => "annecatherinecolin@hotmail.com",
            "password" => Hash::make("dropdeadlover"),
        ]);
        DB::table('users')->insert([
            "name" => "Aleksic Aleksandar",
            "background_id" => 1,
            "race_id" => 1,
            "classe_id" => 1,
            "email" => "shinakira@gmail.com",
            "password" => Hash::make("shinakira"),
        ]);
        DB::table('users')->insert([
            "name" => "Marcyl Adnan",
            "background_id" => 1,
            "race_id" => 1,
            "classe_id" => 1,
            "email" => "marcyl.adnan@gmail.com",
            "password" => Hash::make("caramelo"),
        ]);
        DB::table('users')->insert([
            "name" => "Samy",
            "background_id" => 1,
            "race_id" => 1,
            "classe_id" => 1,
            "email" => "samy@gmail.com",
            "password" => Hash::make("ilovecats"),
        ]);
        DB::table('users')->insert([
            "name" => "Nicolas Sieben",
            "background_id" => 1,
            "race_id" => 1,
            "classe_id" => 1,
            "email" => "galestron@gmail.com",
            "password" => Hash::make("tartineaucaca"),
        ]);
        DB::table('users')->insert([
            "name" => "Jade",
            "background_id" => 1,
            "race_id" => 1,
            "classe_id" => 1,
            "email" => "jade@gmail.com",
            "password" => Hash::make("starbucks"),
        ]);
        DB::table('users')->insert([
            "name" => "Alix",
            "background_id" => 1,
            "race_id" => 1,
            "classe_id" => 1,
            "email" => "alix@gmail.com",
            "password" => Hash::make("pyroblast"),
        ]);
    }
}
