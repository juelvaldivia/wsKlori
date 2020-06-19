<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TablesAction
 * 
 * @property int $idTableAction
 * @property int|null $idTable
 * @property int|null $idAction
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class TablesAction extends Model
{
	use SoftDeletes;
	protected $table = 'tables_actions';
	protected $primaryKey = 'idTableAction';

	protected $casts = [
		'idTable' => 'int',
		'idAction' => 'int'
	];

	protected $fillable = [
		'idTable',
		'idAction'
	];
}
