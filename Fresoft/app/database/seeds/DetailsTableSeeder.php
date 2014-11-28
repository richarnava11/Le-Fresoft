<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DetailsTableSeeder extends Seeder {

	public function run()
	{
		$details = array(['id' => 1, 'cantidadkg' => 30, 'importe' => 1500, 'exit_id' => 1, 'product_id' => 1, 
			'created_at' => new DateTime, 'updated_at' => new DateTime]);

		DB::table('details')->insert($details);
	}

}