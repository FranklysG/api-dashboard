<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SystemDocumentGroup
 * 
 * @property int $id
 * @property int|null $document_id
 * @property int|null $system_group_id
 *
 * @package App\Models\Base
 */
class SystemDocumentGroup extends Model
{
	protected $table = 'system_document_group';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'document_id' => 'int',
		'system_group_id' => 'int'
	];
}
