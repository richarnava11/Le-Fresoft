<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EntrancesTableSeeder extends Seeder {

	public function run()
	{
		
		$entrances = array (['id' => 1, 'entradakg' => 25, 'product_id' => 1, 'user_id' => 1, 
			'created_at' => new DateTime, 'updated_at' => new DateTime]);

		DB::table('entrances')->insert($entrances);

	}

}