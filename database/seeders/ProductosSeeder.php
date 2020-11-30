<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
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
    		 Eventos::create([
    			'nombre'          => $faker->text(10),
		        'paterno'     => $faker->text(20),
		        'materno'      => $faker->text(20),
                'edad' =>     $faker->text(10),
                'dia' =>     $faker->text(10),
                'evento' =>     $faker->text(10),
    		]);
        //
    }
}
}