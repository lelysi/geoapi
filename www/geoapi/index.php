<?php
declare(strict_types=1);
require_once __DIR__ . '/vendor/autoload.php';

new \DB\Database();

$klein = new \Klein\Klein();

$klein->get('/ip2geo', function (\Klein\Request $request, \Klein\Response $response) {
	return (new \GIP\Api\GetCoordinates\Action())($request, $response);
});

$klein->respond(function (\Klein\Request $request, \Klein\Response $response) {
	return $response->code(404);
});

$klein->dispatch();