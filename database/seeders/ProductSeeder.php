<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
   
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_id = Category::pluck('id')->toArray();
        $data = [
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
            ['name' => Str::random(10), 'description' => Str::random(50) ,'thumbnail' => 'https://placeimg.com/100/100/any?' . rand(1, 100), 'price' => random_int(10, 100), 'status'=> random_int(0, 1), 'quantity'=> random_int(0, 50), 'type'=> random_int(0, 2),  'category_id'=>$category_id[array_rand($category_id)], 'created_at' => date('Y-m-d H:i:s')],
        ];
        DB::table('products')->insert($data);
    }
}
