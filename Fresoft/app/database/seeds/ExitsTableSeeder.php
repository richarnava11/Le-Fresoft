<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ExitsTableSeeder extends Seeder {

	public function run()
	{
		
		$exits = array (['id' => 1, 'importe' => 1500, 'pesototal' => 30, 'user_id' => 1, 
			'created_at' => new DateTime, 'updated_at' => new DateTime]);

		DB::table('exitts')->insert($exits);

	}

}