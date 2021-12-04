<?php

namespace App\Models;

use App\Models\Base\SaleType as BaseSaleType;

class SaleType extends BaseSaleType
{
	protected $fillable = [
		'system_user_id',
		'name',
		'status'
	];
}
