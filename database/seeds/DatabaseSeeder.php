<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
	     $this->call(seeder_category::class);
	     $this->call(seeder_e::class);
	     $this->call(seeder_product::class);
    }
}
