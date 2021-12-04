<?php

namespace App\Models;

use App\Models\Base\SystemUserGroup as BaseSystemUserGroup;

class SystemUserGroup extends BaseSystemUserGroup
{
	protected $fillable = [
		'system_user_id',
		'system_group_id'
	];
}
