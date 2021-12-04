<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('system_user_id')->index('fk_exes_system_user1_idx');
			$table->integer('inventory_id')->nullable()->index('fk_exes_inventory1_idx');
			$table->string('description', 45)->nullable();
			$table->string('amount', 45)->nullable();
			$table->decimal('price', 9)->nullable();
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
		Schema::drop('exes');
	}

}
