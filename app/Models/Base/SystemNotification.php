<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SystemNotification
 * 
 * @property int $id
 * @property int|null $system_user_id
 * @property int|null $system_user_to_id
 * @property string|null $subject
 * @property string|null $message
 * @property string|null $dt_message
 * @property string|null $action_url
 * @property string|null $action_label
 * @property string|null $icon
 * @property string|null $checked
 *
 * @package App\Models\Base
 */
class SystemNotification extends Model
{
	protected $table = 'system_notification';
	public $incrementing = true;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'system_user_id' => 'int',
		'system_user_to_id' => 'int'
	];
}
