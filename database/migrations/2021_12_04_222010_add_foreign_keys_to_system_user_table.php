<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSystemUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('system_user', function(Blueprint $table)
		{
			$table->foreign('frontpage_id', 'fk_system_user_system_program1')->references('id')->on('system_program')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('system_user', function(Blueprint $table)
		{
			$table->dropForeign('fk_system_user_system_program1');
		});
	}

}
