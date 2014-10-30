<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToTagItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tag_item', function(Blueprint $table)
		{
			$table->renameColumn('id', 'item_id');
			$table->integer('tag_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tag_item', function(Blueprint $table)
		{
			$table->dropColumn('tag_id');
		});
	}

}
