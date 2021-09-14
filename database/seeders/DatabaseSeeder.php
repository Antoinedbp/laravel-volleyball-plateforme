<?php

namespace Database\Seeders;

use App\Models\Joueur;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ContinentSeeder::class
        ]);
        $this->call([
            RoleSeeder::class
        ]);
        $this->call([
            EquipeSeeder::class
        ]);

        Joueur::factory(10)->create();
    }
}
