<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotteryPrizeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * 奖品表
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lottery_prize', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');//奖品名称
			$table->string('type');//奖品类型
			$table->string('prize_sn'); //奖品兑换码
			$table->string('prize_pic');  //奖品图片
			$table->text('description');  //奖品描述
			$table->integer('amount');  //奖品总数
			$table->tinyInteger('is_thanks');  //是否为谢谢惠顾类
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
		Schema::drop('lottery_prize');
	}

}
