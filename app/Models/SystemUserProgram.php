<?php

namespace App\Models;

use App\Models\Base\SystemUserProgram as BaseSystemUserProgram;

class SystemUserProgram extends BaseSystemUserProgram
{
	protected $fillable = [
		'system_user_id',
		'system_program_id'
	];
}
