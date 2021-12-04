<?php

namespace App\Models;

use App\Models\Base\SystemDocumentUser as BaseSystemDocumentUser;

class SystemDocumentUser extends BaseSystemDocumentUser
{
	protected $fillable = [
		'document_id',
		'system_user_id'
	];
}
