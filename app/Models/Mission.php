<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Mission
 * 
 * @property int $id
 * @property string $nom
 * @property string|null $description
 * @property float $taux_horaire
 * 
 * @property Collection|Pointage[] $pointages
 *
 * @package App\Models
 */
class Mission extends Model
{
	protected $table = 'mission';
	public $timestamps = false;

	protected $casts = [
		'taux_horaire' => 'float'
	];

	protected $fillable = [
		'nom',
		'description',
		'taux_horaire'
	];

	public function pointages()
	{
		return $this->hasMany(Pointage::class, 'idMission');
	}
}
