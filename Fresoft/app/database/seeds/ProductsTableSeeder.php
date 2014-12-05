<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder {

	public function run()
	{
		$products = array (['nombre' => 'shampoo', 'precio' => 30, 'existencia' => 500, 
			'created_at' => new DateTime, 'updated_at' => new DateTime]);

		DB::table('products')->insert($products);


	}

}