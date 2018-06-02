<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class seeder_product extends Seeder
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
        	DB::table('tbl_product')->insert([
        		'id_product'=> $faker->numerify('pro###'),
        		'nama_product'=> $faker->name,
        		'jenis'=> $faker->lexify('?????'),
        		'harga'=> $faker->randomNumber($nbDigits = NULL, $strict = false),
        		'deskripsi'=> $faker->randomLetter  ,
        		'url_gambar'=> $faker->imageUrl($width = 640, $height = 480),
        		'id_category'=> $faker->numerify('cat###'),
        	]);
        }
    }
}
