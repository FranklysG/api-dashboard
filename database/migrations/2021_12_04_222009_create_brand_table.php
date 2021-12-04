<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('brand', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('system_user_id')->index('fk_brand_system_user1_idx');
			$table->string('name', 45)->nullable();
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
		Schema::drop('brand');
	}

}
