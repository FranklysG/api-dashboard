<?php

namespace App\Models;

use App\Models\Base\Office as BaseOffice;

class Office extends BaseOffice
{
	protected $fillable = [
		'system_user_id',
		'description',
		'price',
		'office_type_id'
	];
}
