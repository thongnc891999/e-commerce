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

            ['name' => 'Hoa khai trương', 'parent_id' => '2' , 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Hoa chia buồn', 'parent_id' => '2' , 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Hoa sinh nhật', 'parent_id' => '2' , 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Hoa bó', 'parent_id' => '2' , 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Hoa giỏ', 'parent_id' => '1' , 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Hoa trưng bày', 'parent_id' => '1' , 'created_at' => $date, 'updated_at' => $date],
            
        ];

        DB::table('categories')->insert($data);
    }
}