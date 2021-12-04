<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sale', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('system_user_id')->index('fk_sale_system_user1_idx');
			$table->integer('sale_type_id')->index('fk_sale_sale_type1_idx');
			$table->string('description')->nullable();
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
		Schema::drop('sale');
	}

}
