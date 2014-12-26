<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLortteryUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * 抽奖用户表
	 * @return void
	 * 
	 */
	public function up()
	{
		Schema::create('lottery_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('uid');
			$table->integer('lottery_id');
			$table->integer('number');
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
		Schema::drop('lottery_users');
	}

}
