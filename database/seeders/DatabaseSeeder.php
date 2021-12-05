<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(ApprovetraderSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(PopulationSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(RegistrationSeeder::class);
        $this->call(ReposilbleSeeder::class);
        $this->call(SaleareaSeeder::class);
        $this->call(SubareaSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(VocationaltrainingSeeder::class);
        $this->call(Subarea_NameSeeder::class);
    }
}
