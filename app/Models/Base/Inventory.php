<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Ex;
use App\Models\Product;
use App\Models\Sale;
use App\Models\SystemUser;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventory
 * 
 * @property int $id
 * @property int $system_user_id
 * @property int $product_id
 * @property float|null $amount
 * @property float|null $amount_available
 * @property float|null $price
 * @property float|null $final_price
 * @property string|null $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Product $product
 * @property SystemUser $system_user
 * @property Collection|Ex[] $exes
 * @property Collection|Sale[] $sales
 *
 * @package App\Models\Base
 */
class Inventory extends Model
{
	protected $table = 'inventory';

	protected $casts = [
		'system_user_id' => 'int',
		'product_id' => 'int',
		'amount' => 'float',
		'amount_available' => 'float',
		'price' => 'float',
		'final_price' => 'float'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function system_user()
	{
		return $this->belongsTo(SystemUser::class);
	}

	public function exes()
	{
		return $this->hasMany(Ex::class);
	}

	public function sales()
	{
		return $this->belongsToMany(Sale::class, 'sale_inventory')
					->withPivot('id', 'system_user_id', 'price', 'amount', 'discount', 'description')
					->withTimestamps();
	}
}
