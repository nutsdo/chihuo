<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotteryOptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lottery_option', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('lottery_id');//活动id
			$table->integer('prize_id'); //奖品id
			$table->integer('type'); //奖品类型
			$table->integer('gailv');  //中奖概率
			$table->string('gailv_str');  //中奖概率
			$table->integer('maxnum');//单日发放上限
			$table->integer('jlnum');//奖励数量
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lottery_option');
	}

}
