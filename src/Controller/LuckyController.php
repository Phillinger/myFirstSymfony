<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
	/**
	 * Generates a lucky (random) number
	 * 
	 * @Route("/lucky/number")
	 * 
	 * @return	Response	HTML-formatted string with result.
	 */
	public function number(): Response
	{
		$number = random_int(0, 100);

		return new Response(
			'<html><body>Lucky number: '.$number.'</body></html>'
		);
	}

	/**
	 * Picks a random name from an array.
	 * 
	 * @Route("/lucky/name")
	 * 
	 * @return	Response	HTML-formatted string with name.
	 */
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