<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('custom_menu', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',21);
			$table->string('url');
			$table->string('keyword');
			$table->integer('parent_id');
			$table->string('type',20);
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
		Schema::drop('custom_menu');
	}

}
