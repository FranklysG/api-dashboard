<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Sale;
use App\Models\SystemUser;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SaleType
 * 
 * @property int $id
 * @property int $system_user_id
 * @property string|null $name
 * @property string|null $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property SystemUser $system_user
 * @property Collection|Sale[] $sales
 *
 * @package App\Models\Base
 */
class SaleType extends Model
{
	protected $table = 'sale_type';

	protected $casts = [
		'system_user_id' => 'int'
	];

	public function system_user()
	{
		return $this->belongsTo(SystemUser::class);
	}

	public function sales()
	{
		return $this->hasMany(Sale::class);
	}
}
