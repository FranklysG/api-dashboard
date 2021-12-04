<?php

namespace App\Models;

use App\Models\Base\SystemDocument as BaseSystemDocument;

class SystemDocument extends BaseSystemDocument
{
	protected $fillable = [
		'system_user_id',
		'title',
		'description',
		'category_id',
		'submission_date',
		'archive_date',
		'filename'
	];
}
