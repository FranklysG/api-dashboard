<?php

namespace App\Models;

use App\Models\Base\Employee as BaseEmployee;

class Employee extends BaseEmployee
{
	protected $fillable = [
		'system_user_id',
		'name',
		'document',
		'contact',
		'salary'
	];
}
