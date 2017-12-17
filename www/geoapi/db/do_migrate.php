<?php
declare(strict_types=1);
require_once __DIR__ . '/../vendor/autoload.php';

new \DB\Database();

if ($argv[1] == 'create')
	require __DIR__.'/migrations/create_tables.php';

require __DIR__.'/migrations/fill_geo_objects.php';
require __DIR__.'/migrations/fill_ip.php';