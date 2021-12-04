<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\SystemUnit;
use App\Models\SystemUser;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SystemUserUnit
 * 
 * @property int $id
 * @property int $system_user_id
 * @property int $system_unit_id
 * 
 * @property SystemUnit $system_unit
 * @property SystemUser $system_user
 *
 * @package App\Models\Base
 */
class SystemUserUnit extends Model
{
	protected $table = 'system_user_unit';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'system_user_id' => 'int',
		'system_unit_id' => 'int'
	];

	public function system_unit()
	{
		return $this->belongsTo(SystemUnit::class);
	}

	public function system_user()
	{
		return $this->belongsTo(SystemUser::class);
	}
}
