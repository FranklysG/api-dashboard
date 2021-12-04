<?php

namespace App\Models;

use App\Models\Base\SaleInventory as BaseSaleInventory;

class SaleInventory extends BaseSaleInventory
{
	protected $fillable = [
		'system_user_id',
		'sale_id',
		'inventory_id',
		'price',
		'amount',
		'discount',
		'description'
	];
}
