<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
                DB::table('categories')->insert([
                [
                'created_at'=>$faker->dateTime($max ='now', $timezone = null),
                'updated_at'=>$faker->dateTime($max = 'now', $timezone = null),
                'name' => 'sport'
                ],
                [  
                'created_at'=>$faker->dateTime($max ='now', $timezone = null),
                'updated_at'=>$faker->dateTime($max = 'now', $timezone = null),
                'name' => 'street'             
                ],
                ]
            );
     }
        
}
