<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemNotificationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('system_notification', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('system_user_id')->nullable();
			$table->integer('system_user_to_id')->nullable();
			$table->text('subject')->nullable();
			$table->text('message')->nullable();
			$table->text('dt_message')->nullable();
			$table->text('action_url')->nullable();
			$table->text('action_label')->nullable();
			$table->text('icon')->nullable();
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
		Schema::drop('system_notification');
	}

}
