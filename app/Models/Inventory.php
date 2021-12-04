<?php

namespace App\Models;

use App\Models\Base\Inventory as BaseInventory;

class Inventory extends BaseInventory
{
	protected $fillable = [
		'system_user_id',
		'product_id',
		'amount',
		'amount_available',
		'price',
		'final_price',
		'status'
	];
}
