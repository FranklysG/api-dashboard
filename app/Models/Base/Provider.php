<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use App\Models\SystemUser;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Provider
 * 
 * @property int $id
 * @property int $system_user_id
 * @property string|null $name
 * @property string|null $cnpj
 * @property string|null $contact
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property SystemUser $system_user
 *
 * @package App\Models\Base
 */
class Provider extends Model
{
	protected $table = 'provider';

	protected $casts = [
		'system_user_id' => 'int'
	];

	public function system_user()
	{
		return $this->belongsTo(SystemUser::class);
	}
}
