<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $date = date('Y-m-d H:i:s');
        $data = [

            ['name' => 'Cây chậu treo', 'parent_id' => '2' , 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Cây có hoa', 'parent_id' => '2' , 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Cây dây leo', 'parent_id' => '2' , 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Cây để bàn', 'parent_id' => '2' , 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Cây may mắn', 'parent_id' => '1' , 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Cây trang trí', 'parent_id' => '1' , 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Cây mai', 'parent_id' => '1' , 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Cây lan', 'parent_id' => '1' , 'created_at' => $date, 'updated_at' => $date],
            
        ];

        DB::table('categories')->insert($data);
    }
}