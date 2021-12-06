<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SystemDocumentUser
 * 
 * @property int $id
 * @property int|null $document_id
 * @property int|null $system_user_id
 *
 * @package App\Models\Base
 */
class SystemDocumentUser extends Model
{
	protected $table = 'system_document_user';
	public $incrementing = true;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'document_id' => 'int',
		'system_user_id' => 'int'
	];
}
