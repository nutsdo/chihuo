<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotteryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * 转盘主表
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lottery', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('keyword',24);
			$table->string('title',100);//转盘名称
			$table->string('picurl');//封面url
			$table->text('description');//描述
			$table->text('rules');//活动规则
			$table->integer('numbers');//每日抽奖次数
			$table->string('start_time',11);//开始时间
			$table->string('end_time',11);//结束时间
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
		Schema::drop('lottery');
	}

}
