<?php

namespace App\Models;

use App\Models\Base\Sale as BaseSale;

class Sale extends BaseSale
{
	protected $fillable = [
		'system_user_id',
		'sale_type_id',
		'description'
	];
}
