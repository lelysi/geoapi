<?php
declare(strict_types=1);

namespace GIP\Api\Model;

use Illuminate\Database\Eloquent\Model;

class GeoObject extends Model
{
	protected $table = 'geo_object';
	protected $fillable = [
		'geo_id',
		'city_name',
		'country_name',
	];
}