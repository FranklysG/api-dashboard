<?php

namespace App\Models;

use App\Models\Base\SystemGroup as BaseSystemGroup;

class SystemGroup extends BaseSystemGroup
{
	protected $fillable = [
		'name'
	];
}
