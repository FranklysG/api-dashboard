<?php

namespace App\Models;

use App\Models\Base\OfficeType as BaseOfficeType;

class OfficeType extends BaseOfficeType
{
	protected $fillable = [
		'system_user_id',
		'name',
		'status'
	];
}
