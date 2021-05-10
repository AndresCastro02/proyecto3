<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class imagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Image::factory(10)->create();
        $faker = Faker::create();
        DB::table('images')->insert(
            [
                [
                    'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                    'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                    'url' => 'https://3j1z6j2up0jr3r2zz2111ri2-wpengine.netdna-ssl.com/wp-content/uploads/2020/11/foto_360_ktm_200_DUKE_NG_2021_NEGRA_3.png',
                    'product_id' => 1
                ], 
                [
                    'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                    'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                    'url' => 'https://www.incolmotos-yamaha.com.co/wp-content/uploads/2019/12/r15-azul.png',
                    'product_id' => 2
                ], 
                [
                    'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                    'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                    'url' => 'https://comotos.co/wp-content/uploads/2018/06/TVS-Apache-2018-780x405.png',
                    'product_id' => 3
                ], 
                [
                    'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                    'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                    'url' => 'https://bajajmatriz.com/wp-content/uploads/2020/06/3011230.jpg',
                    'product_id' => 4
                ],  

          
            ]
        );
    }
}