<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\SystemGroupProgram;
use App\Models\SystemUser;
use App\Models\SystemUserProgram;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SystemProgram
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $controller
 * 
 * @property Collection|SystemGroupProgram[] $system_group_programs
 * @property Collection|SystemUser[] $system_users
 * @property Collection|SystemUserProgram[] $system_user_programs
 *
 * @package App\Models\Base
 */
class SystemProgram extends Model
{
	protected $table = 'system_program';
	public $incrementing = true;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	public function system_group_programs()
	{
		return $this->hasMany(SystemGroupProgram::class);
	}

	public function system_users()
	{
		return $this->hasMany(SystemUser::class, 'frontpage_id');
	}

	public function system_user_programs()
	{
		return $this->hasMany(SystemUserProgram::class);
	}
}
