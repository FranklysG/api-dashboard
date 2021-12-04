<?php

namespace App\Models;

use App\Models\Base\SystemUser as BaseSystemUser;

class SystemUser extends BaseSystemUser
{
	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'login',
		'password',
		'email',
		'frontpage_id',
		'system_unit_id',
		'active',
		'type'
	];
}
