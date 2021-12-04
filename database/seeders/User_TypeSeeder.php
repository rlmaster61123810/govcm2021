<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class User_TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Admin'],
            ['name' => 'User'],
        ];

        \App\Models\User_type::insert($data);
    }
}
