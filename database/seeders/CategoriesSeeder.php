<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

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
        for ($i = 0; $i < 50; $i++){
            DB::table('categories')->insert([
                'created_at'=>$faker->dateTime($max ='now', $timezone = null),
                'updated_at'=>$faker->dateTime($max = 'now', $timezone = null),
                'name' => 'categorie'.$i
            ]);
        }
        
    }
}