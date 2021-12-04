<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayableTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payable', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('system_user_id')->index('fk_payable_system_user1_idx');
			$table->string('description', 45)->nullable();
			$table->decimal('price', 9)->nullable();
			$table->string('status', 45)->nullable();
			$table->timestamps(10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('payable');
	}

}
