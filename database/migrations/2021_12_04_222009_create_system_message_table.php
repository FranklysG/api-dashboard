<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('system_message', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('system_user_id')->nullable();
			$table->integer('system_user_to_id')->nullable();
			$table->text('subject')->nullable();
			$table->text('message')->nullable();
			$table->text('dt_message')->nullable();
			$table->char('checked', 1)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('system_message');
	}

}
