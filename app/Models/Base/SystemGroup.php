<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\SystemGroupProgram;
use App\Models\SystemUserGroup;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SystemGroup
 * 
 * @property int $id
 * @property string|null $name
 * 
 * @property Collection|SystemGroupProgram[] $system_group_programs
 * @property Collection|SystemUserGroup[] $system_user_groups
 *
 * @package App\Models\Base
 */
class SystemGroup extends Model
{
	protected $table = 'system_group';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	public function system_group_programs()
	{
		return $this->hasMany(SystemGroupProgram::class);
	}

	public function system_user_groups()
	{
		return $this->hasMany(SystemUserGroup::class);
	}
}
