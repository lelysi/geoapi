<?php
declare(strict_types=1);

$file = fopen(__DIR__ . '/../data/GeoLite2-cut-IPv4.csv', 'r');
if (!$file)
	return false;

$limit = 10000;
$insertData = [];
$count = $limit;
while (($data = fgetcsv($file, 0, ',')) !== false)
{
	$insertData[] = [
		'ip'			=> mb_substr($data[0], 0, mb_strpos($data[0], '/')),
		'latitude'		=> $data[7],
		'longitude'		=> $data[8],
		'geo_object_id'	=> $data[1],
	];

	if (--$count <= 0)
	{
		Illuminate\Database\Capsule\Manager::table('ip')->insert($insertData);
		$insertData = [];
		$count = $limit;
	}
}
fclose($file);
Illuminate\Database\Capsule\Manager::table('ip')->insert($insertData);