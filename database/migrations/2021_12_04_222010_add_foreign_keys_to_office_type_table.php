<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOfficeTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('office_type', function(Blueprint $table)
		{
			$table->foreign('system_user_id', 'fk_service_type_system_user1')->references('id')->on('system_user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('office_type', function(Blueprint $table)
		{
			$table->dropForeign('fk_service_type_system_user1');
		});
	}

}
