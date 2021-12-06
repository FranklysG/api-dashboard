<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\SystemGroup;
use App\Models\SystemUser;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SystemUserGroup
 * 
 * @property int $id
 * @property int|null $system_user_id
 * @property int|null $system_group_id
 * 
 * @property SystemUser|null $system_user
 * @property SystemGroup|null $system_group
 *
 * @package App\Models\Base
 */
class SystemUserGroup extends Model
{
	protected $table = 'system_user_group';
	public $incrementing = true;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'system_user_id' => 'int',
		'system_group_id' => 'int'
	];

	public function system_user()
	{
		return $this->belongsTo(SystemUser::class);
	}

	public function system_group()
	{
		return $this->belongsTo(SystemGroup::class);
	}
}
