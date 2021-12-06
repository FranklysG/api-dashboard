<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\Brand;
use App\Models\Employee;
use App\Models\Ex;
use App\Models\Inventory;
use App\Models\Office;
use App\Models\OfficeType;
use App\Models\Payable;
use App\Models\Product;
use App\Models\Provider;
use App\Models\Sale;
use App\Models\SaleInventory;
use App\Models\SaleType;
use App\Models\SystemProgram;
use App\Models\SystemUserGroup;
use App\Models\SystemUserProgram;
use App\Models\SystemUserUnit;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SystemUser
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $login
 * @property string|null $password
 * @property string|null $email
 * @property int $frontpage_id
 * @property int|null $system_unit_id
 * @property string|null $active
 * @property int|null $type
 * 
 * @property SystemProgram $system_program
 * @property Collection|Brand[] $brands
 * @property Collection|Employee[] $employees
 * @property Collection|Ex[] $exes
 * @property Collection|Inventory[] $inventories
 * @property Collection|Office[] $offices
 * @property Collection|OfficeType[] $office_types
 * @property Collection|Payable[] $payables
 * @property Collection|Product[] $products
 * @property Collection|Provider[] $providers
 * @property Collection|Sale[] $sales
 * @property Collection|SaleInventory[] $sale_inventories
 * @property Collection|SaleType[] $sale_types
 * @property Collection|SystemUserGroup[] $system_user_groups
 * @property Collection|SystemUserProgram[] $system_user_programs
 * @property Collection|SystemUserUnit[] $system_user_units
 *
 * @package App\Models\Base
 */
class SystemUser extends Model
{
	protected $table = 'system_user';
	public $incrementing = true;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'frontpage_id' => 'int',
		'system_unit_id' => 'int',
		'type' => 'int'
	];

	public function system_program()
	{
		return $this->belongsTo(SystemProgram::class, 'frontpage_id');
	}

	public function brands()
	{
		return $this->hasMany(Brand::class);
	}

	public function employees()
	{
		return $this->hasMany(Employee::class);
	}

	public function exes()
	{
		return $this->hasMany(Ex::class);
	}

	public function inventories()
	{
		return $this->hasMany(Inventory::class);
	}

	public function offices()
	{
		return $this->hasMany(Office::class);
	}

	public function office_types()
	{
		return $this->hasMany(OfficeType::class);
	}

	public function payables()
	{
		return $this->hasMany(Payable::class);
	}

	public function products()
	{
		return $this->hasMany(Product::class);
	}

	public function providers()
	{
		return $this->hasMany(Provider::class);
	}

	public function sales()
	{
		return $this->hasMany(Sale::class);
	}

	public function sale_inventories()
	{
		return $this->hasMany(SaleInventory::class);
	}

	public function sale_types()
	{
		return $this->hasMany(SaleType::class);
	}

	public function system_user_groups()
	{
		return $this->hasMany(SystemUserGroup::class);
	}

	public function system_user_programs()
	{
		return $this->hasMany(SystemUserProgram::class);
	}

	public function system_user_units()
	{
		return $this->hasMany(SystemUserUnit::class);
	}
}
