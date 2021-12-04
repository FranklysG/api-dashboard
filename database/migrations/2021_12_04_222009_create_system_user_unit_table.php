<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemUserUnitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('system_user_unit', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('system_user_id')->index('fk_system_user_unit_system_user1_idx');
			$table->integer('system_unit_id')->index('fk_system_user_unit_system_unit1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('system_user_unit');
	}

}
