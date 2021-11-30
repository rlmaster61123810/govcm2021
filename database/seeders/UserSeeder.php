<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\Models\User();
        $user->name = "ลุงเริง";
        $user->username = "admin";
        $user->age = 32;
        $user->email = "mistidea9@gmail.com";
        $user->password = bcrypt('1234');
        $user->save();
    }
}
