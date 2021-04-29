<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
       /* $table->id();
        $table->timestamps();
        $table->string('url');
        $table->unsignedBigInteger('product_id');
        $table->foreign('product_id')->references('id')->on('products');*/
        
        
        
        
        
        
        
        $faker = Faker::create();
        for ($i=0; $i < 50 ; $i++){
            DB::table('images')->insert([
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
                'url'=> $faker->imageUrl($width = 640, $height = 480),
                'product_id'=> $faker->numberBetween(1,50),
            ]);
        }
    }
}
