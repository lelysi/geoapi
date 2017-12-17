<?php
declare(strict_types=1);

namespace GIP\Api\GetCoordinates;

use Klein\Request;
use Klein\Response;

class Action implements \GIP\Api\Action
{
	public function __invoke(Request $request, Response $response)
	{
		$ip = $request->paramsGet()->get('ip');
		if (is_null($ip))
			return $response->json([])->code(404);

		$result = (new DataProvider())->getGeoData($ip);
		return !empty($result)
			? $response->json(json_encode($result))
			: $response->json([])->code(404);
	}
}