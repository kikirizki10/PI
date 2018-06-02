<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class seeder_category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(0,10) as $i) {
        	DB::table('tbl_category')->insert([
        		'id_category' => $faker->numerify('cat###'),
        		'nama_category'=> $faker->name,
        		'url_gambar'=> $faker->imageUrl($width = 640, $height = 480),
        	]);
        }
    }
}