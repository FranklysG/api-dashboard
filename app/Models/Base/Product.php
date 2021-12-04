<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Brand;
use App\Models\Inventory;
use App\Models\SystemUser;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $id
 * @property int $system_user_id
 * @property int $brand_id
 * @property string|null $sku
 * @property string|null $name
 * @property string|null $alias
 * @property string|null $status
 * @property string|null $image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Brand $brand
 * @property SystemUser $system_user
 * @property Collection|Inventory[] $inventories
 *
 * @package App\Models\Base
 */
class Product extends Model
{
	protected $table = 'product';

	protected $casts = [
		'system_user_id' => 'int',
		'brand_id' => 'int'
	];

	public function brand()
	{
		return $this->belongsTo(Brand::class);
	}

	public function system_user()
	{
		return $this->belongsTo(SystemUser::class);
	}

	public function inventories()
	{
		return $this->hasMany(Inventory::class);
	}
}
