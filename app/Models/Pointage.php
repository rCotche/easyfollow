<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pointage
 * 
 * @property int $id
 * @property Carbon $debut_journee
 * @property Carbon $fin_journee
 * @property int $idUsers
 * @property int $idMission
 * 
 * @property Mission $mission
 * @property User $user
 *
 * @package App\Models
 */
class Pointage extends Model
{
	protected $table = 'pointage';
	public $timestamps = false;

	protected $casts = [
		'idUsers' => 'int',
		'idMission' => 'int'
	];

	protected $dates = [
		'debut_journee',
		'fin_journee'
	];

	protected $fillable = [
		'debut_journee',
		'fin_journee',
		'idUsers',
		'idMission'
	];

	public function mission()
	{
		return $this->belongsTo(Mission::class, 'idMission');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'idUsers');
	}
}
