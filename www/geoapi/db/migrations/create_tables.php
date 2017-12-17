<?php
declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

Illuminate\Database\Capsule\Manager::schema()->create(
	'ip',
	function ($table) {
		$table->increments('id');
		$table->string('ip')->unique();
		$table->string('latitude')->nullable();
		$table->string('longitude')->nullable();
		$table->string('geo_object_id')->nullable();
	}
);

Illuminate\Database\Capsule\Manager::schema()->create(
	'geo_object',
	function ($table) {
		$table->string('geo_id')->unique();
		$table->string('city_name')->nullable();
		$table->string('country_name')->nullable();
	}
);