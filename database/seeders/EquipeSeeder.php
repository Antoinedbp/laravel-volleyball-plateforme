<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipes')->insert([
            [
                "nomClub" => "Chelsea FC",
                "ville" => "Londres",
                "pays" => "Angleterre",
                "nbrMax" => 12,
                "continent_id" => 1
            ],
            [
                "nomClub" => "Sydney FC",
                "ville" => "Sydney",
                "pays" => "Australie",
                "nbrMax" => 12,
                "continent_id" => 5
            ],
            [
                "nomClub" => "Orlando City",
                "ville" => "Orlando",
                "pays" => "USA",
                "nbrMax" => 12,
                "continent_id" => 2
            ],
            [
                "nomClub" => "Shenzhen",
                "ville" => "Shenzhen",
                "pays" => "Chine",
                "nbrMax" => 12,
                "continent_id" => 4
            ],
            [
                "nomClub" => "Cape Town City FC",
                "ville" => "Cape Town",
                "pays" => "Afrique du Sud",
                "nbrMax" => 12,
                "continent_id" => 3
            ],
        ]);
    }
}
