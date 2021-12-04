<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSystemUserUnitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('system_user_unit', function(Blueprint $table)
		{
			$table->foreign('system_unit_id', 'fk_system_user_unit_system_unit1')->references('id')->on('system_unit')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('system_user_id', 'fk_system_user_unit_system_user1')->references('id')->on('system_user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('system_user_unit', function(Blueprint $table)
		{
			$table->dropForeign('fk_system_user_unit_system_unit1');
			$table->dropForeign('fk_system_user_unit_system_user1');
		});
	}

}
