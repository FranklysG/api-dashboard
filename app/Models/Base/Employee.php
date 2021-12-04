<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\SystemUser;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 * 
 * @property int $id
 * @property int $system_user_id
 * @property string|null $name
 * @property string|null $document
 * @property string|null $contact
 * @property float|null $salary
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property SystemUser $system_user
 *
 * @package App\Models\Base
 */
class Employee extends Model
{
	protected $table = 'employee';

	protected $casts = [
		'system_user_id' => 'int',
		'salary' => 'float'
	];

	public function system_user()
	{
		return $this->belongsTo(SystemUser::class);
	}
}
