<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\OfficeType;
use App\Models\SystemUser;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Office
 * 
 * @property int $id
 * @property int $system_user_id
 * @property string|null $description
 * @property float|null $price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $office_type_id
 * 
 * @property OfficeType $office_type
 * @property SystemUser $system_user
 *
 * @package App\Models\Base
 */
class Office extends Model
{
	protected $table = 'office';

	protected $casts = [
		'system_user_id' => 'int',
		'price' => 'float',
		'office_type_id' => 'int'
	];

	public function office_type()
	{
		return $this->belongsTo(OfficeType::class);
	}

	public function system_user()
	{
		return $this->belongsTo(SystemUser::class);
	}
}
