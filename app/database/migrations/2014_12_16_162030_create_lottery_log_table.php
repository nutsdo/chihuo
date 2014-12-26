<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotteryLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * 抽奖记录表
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lottery_log', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('uid');
			$table->integer('lottery_id');
			$table->integer('prize_id');
			$table->string('message');
			$table->string('address');
			$table->string('telphone',11);
			$table->string('zip',15);
			$table->tinyInteger('state');
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
		Schema::drop('lottery_log');
	}

}
