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
        $user->name = "อาจารย์แดง";
        $user->email = "mistidea9@gmail.com";
        $user->password = bcrypt('123456');
        $user->user_Type = "0";
        $user->save();
    }
}
