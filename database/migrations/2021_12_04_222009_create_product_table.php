<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('system_user_id')->index('fk_product_system_user1_idx');
			$table->integer('brand_id')->index('fk_product_brand1_idx');
			$table->string('sku', 45)->nullable();
			$table->string('name', 45)->nullable();
			$table->string('alias', 45)->nullable();
			$table->string('status', 45)->nullable();
			$table->string('image')->nullable();
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
		Schema::drop('product');
	}

}
