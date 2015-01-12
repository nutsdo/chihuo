<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('follow', function(Blueprint $table)
		{
			$table->increments('follow_id'); //自增id
            $table->integer('open_id');
            $table->integer('appid');
            $table->string('nickname');
                       $table->smallInteger('sex');
                       $table->string('language');
                       $table->string('city');
                       $table->string('province');
                       $table->string('country');
                       $table->string('headimgurl');
                       $table->integer('subscribe_time');
                       $table->string('unionid');
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
		Schema::drop('follow');
	}

}
