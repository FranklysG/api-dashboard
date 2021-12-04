<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSaleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sale', function(Blueprint $table)
		{
			$table->foreign('sale_type_id', 'fk_sale_sale_type1')->references('id')->on('sale_type')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('system_user_id', 'fk_sale_system_user1')->references('id')->on('system_user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sale', function(Blueprint $table)
		{
			$table->dropForeign('fk_sale_sale_type1');
			$table->dropForeign('fk_sale_system_user1');
		});
	}

}
