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
        $this->call(Approvetrader_NameSeeder::class);
        $this->call(Community_NameSeeder::class);
        $this->call(ReposilbleSeeder::class);
        $this->call(Subarea_NameSeeder::class);
        $this->call(Subdistrict_NameSeeder::class);
        $this->call(User_TypeSeeder::class);
        $this->call(UserSeeder::class);

    }
}
