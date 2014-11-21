<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			//$table->int('id');
			$table->string('nombre');
			$table->string('password');
			$table->string('email');
			$table->timestamps();
		});


		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			//$table->int('id');
			$table->string('nombre');
			$table->double('precio');
			$table->integer('existencia');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
