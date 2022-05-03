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
            "email" => "annecatherinecolin@hotmail.com",
            "password" => Hash::make("dropdeadlover"),
        ]);
        DB::table('users')->insert([
            "name" => "Aleksic Aleksandar",
            "email" => "shinakira@gmail.com",
            "password" => Hash::make("shinakira"),
        ]);
        DB::table('users')->insert([
            "name" => "Marcyl Adnan",
            "email" => "marcyl.adnan@gmail.com",
            "password" => Hash::make("caramelo"),
        ]);
        DB::table('users')->insert([
            "name" => "Samy",
            "email" => "samy@gmail.com",
            "password" => Hash::make("ilovecats"),
        ]);
        DB::table('users')->insert([
            "name" => "Nicolas Sieben",
            "email" => "galestron@gmail.com",
            "password" => Hash::make("tartineaucaca"),
        ]);
        DB::table('users')->insert([
            "name" => "Jade",
            "email" => "jade@gmail.com",
            "password" => Hash::make("starbucks"),
        ]);
        DB::table('users')->insert([
            "name" => "Alix",
            "email" => "alix@gmail.com",
            "password" => Hash::make("pyroblast"),
        ]);
    }
}
