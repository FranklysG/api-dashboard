<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models\Base;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SystemDocument
 * 
 * @property int $id
 * @property int|null $system_user_id
 * @property string|null $title
 * @property string|null $description
 * @property int|null $category_id
 * @property Carbon|null $submission_date
 * @property Carbon|null $archive_date
 * @property string|null $filename
 *
 * @package App\Models\Base
 */
class SystemDocument extends Model
{
	protected $table = 'system_document';
	public $incrementing = true;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'system_user_id' => 'int',
		'category_id' => 'int'
	];

	protected $dates = [
		'submission_date',
		'archive_date'
	];
}
