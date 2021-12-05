<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Subarea_NameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'หายยา'],
            ['name' => 'ช้างม่อย'],
            ['name' => 'ศรีภูมิ'],
            ['name' => 'วัดเกต'],
            ['name' => 'ช้างคลาน'],
            ['name' => 'พระสิงห์'],
            ['name' => 'สุเทพ '],
            ['name' => 'ป่าแดด'],
            ['name' => 'ฟ้าฮ่าม'],
            ['name' => 'หนองป่าครั่ง'],
            ['name' => 'ท่าศาลา'],
            ['name' => 'ป่าตัน'],
            ['name' => 'หนองหอย'],
            ['name' => 'ช้างเผือก'],
        ];
        \App\Models\Subarea_name::insert($data);
    }
}
