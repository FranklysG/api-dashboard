<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSystemUserGroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('system_user_group', function(Blueprint $table)
		{
			$table->foreign('system_user_id', 'system_user_group_ibfk_1')->references('id')->on('system_user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('system_group_id', 'system_user_group_ibfk_2')->references('id')->on('system_group')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('system_user_group', function(Blueprint $table)
		{
			$table->dropForeign('system_user_group_ibfk_1');
			$table->dropForeign('system_user_group_ibfk_2');
		});
	}

}
