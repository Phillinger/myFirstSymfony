<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
	public function number(): Response
	{
		$number = random_int(0, 100);

		return new Response(
			'<html><body>Lucky number: '.$number.'</body></html>'
		);
	}

	public function name(): Response
	{
		$names = array(
			'Philip',
			'Jenny',
			'Alexis',
			'Felicitas',
			'Marlene',
			'Charlie'
		);

		return new Response(
			'<html><body>Lucky name: '.$names[random_int(0,5)].'</body></html>'
		);
	}
}