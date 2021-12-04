<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inventory', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('system_user_id')->index('fk_inventory_system_user1_idx');
			$table->integer('product_id')->index('fk_inventory_product1_idx');
			$table->float('amount', 10, 0)->nullable();
			$table->float('amount_available', 10, 0)->nullable();
			$table->float('price', 10, 0)->nullable();
			$table->float('final_price', 10, 0)->nullable();
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
		Schema::drop('inventory');
	}

}
