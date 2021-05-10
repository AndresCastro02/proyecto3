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
                'price' => 11900000,
                'available' => 1,
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'video' => 'https://www.youtube.com/embed/93uQdQa71ws'
            ],
            [
                'name'=> 'Yamaha R15',
                'description' => 'Super Sports',
                'price' => 12000000,
                'available' => 1,
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'video' => "https://www.youtube.com/embed/lX8y6zLcsNg"
            ],[
                'name'=> 'Apache 200',
                'description' => 'Street',
                'price' => 8200000,
                'available' => 1,
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'video' => 'https://www.youtube.com/embed/kx4JmXIOvDc'
                
            ],[
                'name'=> 'pulsar 200',
                'description' => 'Street',
                'price' => 9500000,
                'available' => 1,
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'video' => "https://www.youtube.com/embed/nWm8dl289jo"
           
            ]]);

        }
    }
