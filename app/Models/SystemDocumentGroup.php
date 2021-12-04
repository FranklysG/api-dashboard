<?php

namespace App\Models;

use App\Models\Base\SystemDocumentGroup as BaseSystemDocumentGroup;

class SystemDocumentGroup extends BaseSystemDocumentGroup
{
	protected $fillable = [
		'document_id',
		'system_group_id'
	];
}
