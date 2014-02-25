<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('venues', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('user_id');
			$table->string('name');//unique field
			$table->string('email');
			$table->string('address');
			$table->string('display_name');
			$table->string('display_welcom');
			$table->string('display_footer');
			
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
		Schema::drop('venues');
	}

}
