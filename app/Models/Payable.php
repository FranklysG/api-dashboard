<?php

namespace App\Models;

use App\Models\Base\Payable as BasePayable;

class Payable extends BasePayable
{
	protected $fillable = [
		'system_user_id',
		'description',
		'price',
		'status'
	];
}
