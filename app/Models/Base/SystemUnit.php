<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\SystemUserUnit;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SystemUnit
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $connection_name
 * 
 * @property Collection|SystemUserUnit[] $system_user_units
 *
 * @package App\Models\Base
 */
class SystemUnit extends Model
{
	protected $table = 'system_unit';
	public $incrementing = true;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	public function system_user_units()
	{
		return $this->hasMany(SystemUserUnit::class);
	}
}
