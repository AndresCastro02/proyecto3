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
        
            DB::table('products')->insert([
                'name'=> 'Duke 200ng',
                'description' => 'Sport',
                'price' => $faker->numberBetween(10000,1000000),
                'available' => $faker->boolean($chanceOfGettingTrue=50),
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'state' => $faker-> randomElement(["Disponible", "agotada"])
            ]);
            DB::table('products')->insert([
                'name'=> 'Yamaha R15',
                'description' => 'Super Sports',
                'price' => $faker->numberBetween(10000,1000000),
                'available' => $faker->boolean($chanceOfGettingTrue=50),
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'state' => $faker-> randomElement(["Disponible", "agotada"])
            ]);
            DB::table('products')->insert([
                'name'=> 'Apache 200',
                'description' => 'Street',
                'price' => $faker->numberBetween(10000,1000000),
                'available' => $faker->boolean($chanceOfGettingTrue=50),
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'state' => $faker-> randomElement(["Disponible", "agotada"])
            ]);
            DB::table('products')->insert([
                'name'=> 'pulsar 200',
                'description' => 'Street',
                'price' => $faker->numberBetween(10000,1000000),
                'available' => $faker->boolean($chanceOfGettingTrue=50),
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'state' => $faker-> randomElement(["Disponible", "agotada"])
            ]);

        }
    }
    