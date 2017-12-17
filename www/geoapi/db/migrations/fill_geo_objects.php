<?php
declare(strict_types=1);

$file = fopen(__DIR__ . '/../data/GeoLite2-City-Locations-en.csv', 'r');
if (!$file)
	return false;

$limit = 10000;
$insertData = [];
$count = $limit;
while (($data = fgetcsv($file, 0, ',')) !== false)
{
	$insertData[] = [
		'geo_id'		=> $data[0],
		'city_name'		=> $data[10],
		'country_name'	=> $data[5],
	];

	if (--$count <= 0)
	{
		Illuminate\Database\Capsule\Manager::table('geo_object')->insert($insertData);
		$insertData = [];
		$count = $limit;
	}
}
fclose($file);
Illuminate\Database\Capsule\Manager::table('geo_object')->insert($insertData);