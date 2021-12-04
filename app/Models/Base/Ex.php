<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Inventory;
use App\Models\SystemUser;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ex
 * 
 * @property int $id
 * @property int $system_user_id
 * @property int|null $inventory_id
 * @property string|null $description
 * @property string|null $amount
 * @property float|null $price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Inventory|null $inventory
 * @property SystemUser $system_user
 *
 * @package App\Models\Base
 */
class Ex extends Model
{
	protected $table = 'exes';

	protected $casts = [
		'system_user_id' => 'int',
		'inventory_id' => 'int',
		'price' => 'float'
	];

	public function inventory()
	{
		return $this->belongsTo(Inventory::class);
	}

	public function system_user()
	{
		return $this->belongsTo(SystemUser::class);
	}
}
