<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\SystemUser;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Payable
 * 
 * @property int $id
 * @property int $system_user_id
 * @property string|null $description
 * @property float|null $price
 * @property string|null $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property SystemUser $system_user
 *
 * @package App\Models\Base
 */
class Payable extends Model
{
	protected $table = 'payable';

	protected $casts = [
		'system_user_id' => 'int',
		'price' => 'float'
	];

	public function system_user()
	{
		return $this->belongsTo(SystemUser::class);
	}
}
