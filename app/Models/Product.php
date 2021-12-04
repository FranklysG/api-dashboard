<?php

namespace App\Models;

use App\Models\Base\Product as BaseProduct;

class Product extends BaseProduct
{
	protected $fillable = [
		'system_user_id',
		'brand_id',
		'sku',
		'name',
		'alias',
		'status',
		'image'
	];
}
