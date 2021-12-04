<?php

namespace App\Models;

use App\Models\Base\SystemUserUnit as BaseSystemUserUnit;

class SystemUserUnit extends BaseSystemUserUnit
{
	protected $fillable = [
		'system_user_id',
		'system_unit_id'
	];
}
