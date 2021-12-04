<?php

namespace App\Models;

use App\Models\Base\SystemNotification as BaseSystemNotification;

class SystemNotification extends BaseSystemNotification
{
	protected $fillable = [
		'system_user_id',
		'system_user_to_id',
		'subject',
		'message',
		'dt_message',
		'action_url',
		'action_label',
		'icon',
		'checked'
	];
}
