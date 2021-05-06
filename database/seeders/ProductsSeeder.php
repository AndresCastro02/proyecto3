<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
            DB::table('products')->insert([[
                'name'=> 'Duke 200ng',
                'description' => 'Sport',
                'price' => $faker->numberBetween(10000,1000000),
                'available' => 1,
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
            ],
            [
                'name'=> 'Yamaha R15',
                'description' => 'Super Sports',
                'price' => $faker->numberBetween(10000,1000000),
                'available' => 1,
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
            ],[
                'name'=> 'Apache 200',
                'description' => 'Street',
                'price' => $faker->numberBetween(10000,1000000),
                'available' => 1,
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
                
            ],[
                'name'=> 'pulsar 200',
                'description' => 'Street',
                'price' => $faker->numberBetween(10000,1000000),
                'available' => 1,
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
           
            ]]);

        }
    }
