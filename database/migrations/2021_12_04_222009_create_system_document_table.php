<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemDocumentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('system_document', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('system_user_id')->nullable();
			$table->text('title')->nullable();
			$table->text('description')->nullable();
			$table->integer('category_id')->nullable();
			$table->date('submission_date')->nullable();
			$table->date('archive_date')->nullable();
			$table->text('filename')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('system_document');
	}

}
