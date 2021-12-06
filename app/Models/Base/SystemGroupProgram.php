<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\SystemGroup;
use App\Models\SystemProgram;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SystemGroupProgram
 * 
 * @property int $id
 * @property int|null $system_group_id
 * @property int|null $system_program_id
 * 
 * @property SystemGroup|null $system_group
 * @property SystemProgram|null $system_program
 *
 * @package App\Models\Base
 */
class SystemGroupProgram extends Model
{
	protected $table = 'system_group_program';
	public $incrementing = true;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'system_group_id' => 'int',
		'system_program_id' => 'int'
	];

	public function system_group()
	{
		return $this->belongsTo(SystemGroup::class);
	}

	public function system_program()
	{
		return $this->belongsTo(SystemProgram::class);
	}
}
