<?php
declare(strict_types=1);

namespace GIP\Api\Model;

use Illuminate\Database\Eloquent\Model;

class Ip extends Model
{
	protected $table = 'ip';
	protected $fillable = [
		'ip',
		'latitude',
		'longitude',
		'geoname_ip',
	];
}