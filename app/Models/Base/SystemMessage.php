<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SystemMessage
 * 
 * @property int $id
 * @property int|null $system_user_id
 * @property int|null $system_user_to_id
 * @property string|null $subject
 * @property string|null $message
 * @property string|null $dt_message
 * @property string|null $checked
 *
 * @package App\Models\Base
 */
class SystemMessage extends Model
{
	protected $table = 'system_message';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'system_user_id' => 'int',
		'system_user_to_id' => 'int'
	];
}
