<?php
declare(strict_types=1);

namespace GIP\Api\GetCoordinates;

use GIP\Api\Model\Ip;
use GIP\Api\Model\GeoObject;

class DataProvider
{
	private const UNDEFINED_FIELD = 'undefined';

	public function getGeoData(string $ipString): array
	{
		$ipStore = Ip::where('ip', $ipString)->get()->toArray();

		if (empty($ipStore))
			return [];

		$ipStoreFirstRow = reset($ipStore);

		$geoStore = GeoObject::where('geo_id', $ipStoreFirstRow['geoname_id'])->get()->toArray();

		if (!empty($geoStore))
		{
			$geoStoreFirstRow = reset($geoStore);
			$cityName = $geoStoreFirstRow['city_name'];
			$countryName = $geoStoreFirstRow['country_name'];
		}

		return [
			'latitude'		=> $ipStoreFirstRow['latitude'],
			'longitude'		=> $ipStoreFirstRow['longitude'],
			'cityName'		=> $cityName ?? self::UNDEFINED_FIELD,
			'countryName'	=> $countryName ?? self::UNDEFINED_FIELD,
		];
	}
}