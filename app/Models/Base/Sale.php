<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Inventory;
use App\Models\SaleType;
use App\Models\SystemUser;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sale
 * 
 * @property int $id
 * @property int $system_user_id
 * @property int $sale_type_id
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property SaleType $sale_type
 * @property SystemUser $system_user
 * @property Collection|Inventory[] $inventories
 *
 * @package App\Models\Base
 */
class Sale extends Model
{
	protected $table = 'sale';

	protected $casts = [
		'system_user_id' => 'int',
		'sale_type_id' => 'int'
	];

	public function sale_type()
	{
		return $this->belongsTo(SaleType::class);
	}

	public function system_user()
	{
		return $this->belongsTo(SystemUser::class);
	}

	public function inventories()
	{
		return $this->belongsToMany(Inventory::class, 'sale_inventory')
					->withPivot('id', 'system_user_id', 'price', 'amount', 'discount', 'description')
					->withTimestamps();
	}
}
