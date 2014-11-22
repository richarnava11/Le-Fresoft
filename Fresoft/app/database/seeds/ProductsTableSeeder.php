<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		$products = array (['id' => 1, 'nombre' => 'mermelada', 'precio' => 50, 'existencia' => 1, 
			'created_at' => new DateTime, 'updated_at' => new DateTime]);

		DB::table('products')->insert($products);


	}

}