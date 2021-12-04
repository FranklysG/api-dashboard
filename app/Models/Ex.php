<?php

namespace App\Models;

use App\Models\Base\Ex as BaseEx;

class Ex extends BaseEx
{
	protected $fillable = [
		'system_user_id',
		'inventory_id',
		'description',
		'amount',
		'price'
	];
}
