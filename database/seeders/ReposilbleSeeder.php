<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReposilbleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reposilble= new \App\Models\Resposilble();
        $reposilble->community_id = '01';
        $reposilble->community_leader = "นางจตุพร วิชัยยา ";
        $reposilble->leader_phone = "082-2218150";
        $reposilble->save();
    }
}
