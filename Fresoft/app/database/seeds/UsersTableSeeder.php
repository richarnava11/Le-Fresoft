<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$users = array (['id' => 1, 'nombre' => 'admin', 'password' => Hash::make('admin'), 'email' => 
		'primos_12@gmail.com', 'created_at' => new DateTime, 'updated_at' => new DateTime]);

		DB::table('users')->insert($users);

	}


}