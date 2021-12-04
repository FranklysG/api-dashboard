<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('system_user', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('name', 100)->nullable();
			$table->string('login', 100)->nullable();
			$table->string('password', 100)->nullable();
			$table->string('email', 100)->nullable();
			$table->integer('frontpage_id')->index('fk_system_user_system_program1_idx');
			$table->integer('system_unit_id')->nullable();
			$table->char('active', 1)->nullable();
			$table->integer('type')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('system_user');
	}

}
