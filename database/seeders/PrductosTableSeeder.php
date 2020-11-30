<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PrductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

    	for ($i=1; $i <= 30; $i++) {
    		 Sesionees::create([
    			'nombre'          => $faker->text(10),
		        'paterno'     => $faker->text(20),
		        'materno'      => $faker->text(20),
		        'email'            => $faker->text(20),
                'edad' =>     $faker->text(10),
                'fecha' =>     $faker->text(10),
                'albunes' =>     $faker->text(10),
    		]);
    	}
        //
    }
}
