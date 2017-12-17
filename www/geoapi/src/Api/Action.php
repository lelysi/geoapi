<?php
declare(strict_types=1);

namespace GIP\Api;

use Klein\Request;
use Klein\Response;

interface Action
{
	public function __invoke(Request $request, Response $response);
}