<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemGroupProgramTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('system_group_program', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('system_group_id')->nullable()->index('system_group_program_group_idx');
			$table->integer('system_program_id')->nullable()->index('system_group_program_program_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('system_group_program');
	}

}
