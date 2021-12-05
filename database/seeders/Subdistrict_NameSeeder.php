<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Subdistrict_NameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'แขวงนครพิงค์'],
            ['name' => 'แขวงกาวิละ'],
            ['name' => 'แขวงเม็งราย'],
            ['name' => 'แขวงศรีวิชัย'],
        ];
            \App\Models\Subdistrict_name::insert($data);
    }
}
