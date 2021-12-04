<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SystemDocumentCategory
 * 
 * @property int $id
 * @property string|null $name
 *
 * @package App\Models\Base
 */
class SystemDocumentCategory extends Model
{
	protected $table = 'system_document_category';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];
}
