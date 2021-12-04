<?php

namespace App\Models;

use App\Models\Base\Provider as BaseProvider;

class Provider extends BaseProvider
{
	protected $fillable = [
		'system_user_id',
		'name',
		'cnpj',
		'contact'
	];
}
