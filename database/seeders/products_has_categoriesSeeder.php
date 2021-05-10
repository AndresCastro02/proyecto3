<?php

namespace Database\Seeders;

use App\Models\ProductHasCategory;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class products_has_categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

                DB::table('products_has_categories')->insert([
                [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'product_id' => 1,
                'category_id' => 1
                ],
                [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'product_id' => 3,
                'category_id' => 2
                ],
                [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'product_id' => 2,
                'category_id' => 1
                    ],
                [
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'product_id' => 4,
                'category_id' => 2
                ],
            
            ]);
    }
}
