<?php
declare(strict_types=1);

namespace DB;

use Illuminate\Database\Capsule\Manager as Capsule;

class Database
{
	public function __construct()
	{
		$capsule = new Capsule;
		$capsule->addConnection([
			'driver'    => 'mysql',
			'host'      => 'mysql',
			'database'  => 'geoip',
			'username'  => 'root',
			'password'  => 'secret',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		]);
		// Setup the Eloquent ORM…
		$capsule->bootEloquent();
		// Make this Capsule instance available globally via static methods... (optional)
		$capsule->setAsGlobal();
	}
}