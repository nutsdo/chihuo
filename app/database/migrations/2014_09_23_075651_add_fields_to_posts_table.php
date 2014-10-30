<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('posts', function(Blueprint $table)
		{
			$table->Integer('user_id');
			$table->text('title');
			$table->string('author');
			$table->text('content');
			$table->integer('views');
			$table->integer('replies');
			$table->string('cover');
			$table->string('post_time');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('posts', function(Blueprint $table)
		{
			$table->dropColumn('user_id', 'title', 'author', 'content', 'views', 'replies', 'cover', 'post_time');
		});
	}

}
