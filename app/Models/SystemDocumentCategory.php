<?php

namespace App\Models;

use App\Models\Base\SystemDocumentCategory as BaseSystemDocumentCategory;

class SystemDocumentCategory extends BaseSystemDocumentCategory
{
	protected $fillable = [
		'name'
	];
}
