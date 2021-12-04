<?php

namespace App\Models;

use App\Models\Base\SystemProgram as BaseSystemProgram;

class SystemProgram extends BaseSystemProgram
{
	protected $fillable = [
		'name',
		'controller'
	];
}
