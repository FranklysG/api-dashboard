<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Office;
use App\Models\SystemUser;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OfficeType
 * 
 * @property int $id
 * @property int $system_user_id
 * @property string|null $name
 * @property string|null $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property SystemUser $system_user
 * @property Collection|Office[] $offices
 *
 * @package App\Models\Base
 */
class OfficeType extends Model
{
	protected $table = 'office_type';

	protected $casts = [
		'system_user_id' => 'int'
	];

	public function system_user()
	{
		return $this->belongsTo(SystemUser::class);
	}

	public function offices()
	{
		return $this->hasMany(Office::class);
	}
}
