<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Inventory;
use App\Models\Sale;
use App\Models\SystemUser;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SaleInventory
 * 
 * @property int $id
 * @property int $system_user_id
 * @property int $sale_id
 * @property int $inventory_id
 * @property float|null $price
 * @property int|null $amount
 * @property float|null $discount
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Inventory $inventory
 * @property Sale $sale
 * @property SystemUser $system_user
 *
 * @package App\Models\Base
 */
class SaleInventory extends Model
{
	protected $table = 'sale_inventory';
	public $incrementing = false;

	protected $casts = [
		'id' => 'int',
		'system_user_id' => 'int',
		'sale_id' => 'int',
		'inventory_id' => 'int',
		'price' => 'float',
		'amount' => 'int',
		'discount' => 'float'
	];

	public function inventory()
	{
		return $this->belongsTo(Inventory::class);
	}

	public function sale()
	{
		return $this->belongsTo(Sale::class);
	}

	public function system_user()
	{
		return $this->belongsTo(SystemUser::class);
	}
}
