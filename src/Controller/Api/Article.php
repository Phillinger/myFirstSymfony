<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Article
{
		/**
	 * Gets article date
	 * 
	 * @Route("/api/articles/{id}", methods={"GET", "HEAD"})
	 * 
	 * @return	Response	JSON-formatted article data
	 */
	public function get(int $id): Response
	{
		return new Response(
			'<html><body>JSON-DATA from article with id '.$id.'</body></html>'
		);
	}


}