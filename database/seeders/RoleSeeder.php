<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date('Y-m-d H:i:s');
        $data = [
            ['name' => 'admin', 'created_at' => $date, 'updated_at' => $date],
            ['name' => 'user', 'created_at' => $date, 'updated_at' => $date],
            // ['name' => 'editor', 'created_at' => $date, 'updated_at' => $date],
            // ['name' => 'shipper', 'created_at' => $date, 'updated_at' => $date],

        ];

        DB::table('roles')->insert($data);
    }
}
