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

            ['name' => 'Hoa khai trương', 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Hoa chia buồn', 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Hoa sinh nhật', 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Hoa bó', 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Hoa giỏ', 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'Hoa trưng bày', 'created_at' => $date, 'updated_at' => $date],
            
        ];

        DB::table('categories')->insert($data);
    }
}