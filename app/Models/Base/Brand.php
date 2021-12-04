<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Product;
use App\Models\SystemUser;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Brand
 * 
 * @property int $id
 * @property int $system_user_id
 * @property string|null $name
 * @property string|null $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property SystemUser $system_user
 * @property Collection|Product[] $products
 *
 * @package App\Models\Base
 */
class Brand extends Model
{
	protected $table = 'brand';
	public $incrementing = false;

	protected $casts = [
		'id' => 'int',
		'system_user_id' => 'int'
	];

	public function system_user()
	{
		return $this->belongsTo(SystemUser::class);
	}

	public function products()
	{
		return $this->hasMany(Product::class);
	}
}
