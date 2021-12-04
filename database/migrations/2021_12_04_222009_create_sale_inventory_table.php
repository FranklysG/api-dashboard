<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleInventoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sale_inventory', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('system_user_id')->index('fk_sale_product_system_user1_idx');
			$table->integer('sale_id')->index('fk_sale_product_sale1_idx');
			$table->integer('inventory_id')->index('fk_sale_inventory_inventory1_idx');
			$table->decimal('price', 9)->nullable();
			$table->integer('amount')->nullable();
			$table->decimal('discount', 9)->nullable()->default(0.00);
			$table->string('description', 45)->nullable();
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
		Schema::drop('sale_inventory');
	}

}
