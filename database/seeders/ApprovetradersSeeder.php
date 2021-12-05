<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApprovetradersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['product_name' => 'อาหาร'],
            ['product_name' => 'ของใช้ ของตกแต่ง ของที่ระลึก'],
            ['product_name' => 'เครื่องดื่ม'],
            ['product_name' => 'สมุนไพร ไม่ใช่อาหาร'],
            ['product_name' => 'เสื้อผ้าเครื่องแต่งกาย'],
            ['product_name' => 'อื่นๆ'],


        ];
            \App\Models\Approvetrader::insert($data);
    }
}
