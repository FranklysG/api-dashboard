<?php

namespace App\Models;

use App\Models\Base\SystemGroupProgram as BaseSystemGroupProgram;

class SystemGroupProgram extends BaseSystemGroupProgram
{
	protected $fillable = [
		'system_group_id',
		'system_program_id'
	];
}
