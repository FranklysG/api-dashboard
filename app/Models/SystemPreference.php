<?php

namespace App\Models;

use App\Models\Base\SystemPreference as BaseSystemPreference;

class SystemPreference extends BaseSystemPreference
{
	protected $fillable = [
		'id',
		'value'
	];
}
