<?php

namespace App\Models;

use App\Models\Base\SystemUnit as BaseSystemUnit;

class SystemUnit extends BaseSystemUnit
{
	protected $fillable = [
		'name',
		'connection_name'
	];
}
