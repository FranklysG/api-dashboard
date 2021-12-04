<?php

namespace App\Models;

use App\Models\Base\SystemMessage as BaseSystemMessage;

class SystemMessage extends BaseSystemMessage
{
	protected $fillable = [
		'system_user_id',
		'system_user_to_id',
		'subject',
		'message',
		'dt_message',
		'checked'
	];
}
