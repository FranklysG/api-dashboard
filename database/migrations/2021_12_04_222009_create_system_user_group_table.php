<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemUserGroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('system_user_group', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('system_user_id')->nullable()->index('system_user_group_user_idx');
			$table->integer('system_group_id')->nullable()->index('system_user_group_group_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('system_user_group');
	}

}
