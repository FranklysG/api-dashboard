<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOfficeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('office', function(Blueprint $table)
		{
			$table->foreign('office_type_id', 'fk_office_office_type1')->references('id')->on('office_type')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('system_user_id', 'fk_services_system_user1')->references('id')->on('system_user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('office', function(Blueprint $table)
		{
			$table->dropForeign('fk_office_office_type1');
			$table->dropForeign('fk_services_system_user1');
		});
	}

}
