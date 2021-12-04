<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToInventoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inventory', function(Blueprint $table)
		{
			$table->foreign('product_id', 'fk_inventory_product1')->references('id')->on('product')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('system_user_id', 'fk_inventory_system_user1')->references('id')->on('system_user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inventory', function(Blueprint $table)
		{
			$table->dropForeign('fk_inventory_product1');
			$table->dropForeign('fk_inventory_system_user1');
		});
	}

}
