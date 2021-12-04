<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToExesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('exes', function(Blueprint $table)
		{
			$table->foreign('inventory_id', 'fk_exes_inventory1')->references('id')->on('inventory')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('system_user_id', 'fk_exes_system_user1')->references('id')->on('system_user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('exes', function(Blueprint $table)
		{
			$table->dropForeign('fk_exes_inventory1');
			$table->dropForeign('fk_exes_system_user1');
		});
	}

}
