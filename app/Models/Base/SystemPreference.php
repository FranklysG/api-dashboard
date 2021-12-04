<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SystemPreference
 * 
 * @property string|null $id
 * @property string|null $value
 *
 * @package App\Models\Base
 */
class SystemPreference extends Model
{
	protected $table = 'system_preference';
	public $incrementing = false;
	public $timestamps = false;
}
