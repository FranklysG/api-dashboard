<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\SystemProgram;
use App\Models\SystemUser;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SystemUserProgram
 * 
 * @property int $id
 * @property int|null $system_user_id
 * @property int|null $system_program_id
 * 
 * @property SystemUser|null $system_user
 * @property SystemProgram|null $system_program
 *
 * @package App\Models\Base
 */
class SystemUserProgram extends Model
{
	protected $table = 'system_user_program';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'system_user_id' => 'int',
		'system_program_id' => 'int'
	];

	public function system_user()
	{
		return $this->belongsTo(SystemUser::class);
	}

	public function system_program()
	{
		return $this->belongsTo(SystemProgram::class);
	}
}
