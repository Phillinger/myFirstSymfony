<?php

namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class Article
{
	/**
	 * Gets article data
	 *
	 * @Route(
	 * 	"/api/articles/{id<\d+>?-1}",
	 * 	name="article_get",
	 * 	methods={"GET"})
	 *
	 * @return	JsonResponse	JSON-formatted article data
	 */
	public function get(int $id): JsonResponse
	{
		if ($id == -1)
			return $this->get_last_ten();

		// fetch data
		$data = array("id" => $id);

		$response = new JsonResponse();
		$response->setData($data);

		return $response;
	}


	/**
	 * Gets 10 last changed articles
	 *
	 * @return	JsonResponse	JSON-formatted article data
	 */
	private function get_last_ten(): JsonResponse
	{
		// fetch data
		$data = array(
			['id' => 10],
			['id' => 11],
			['id' => 12],
			['id' => 13],
			['id' => 14],
			['id' => 15],
			['id' => 16],
			['id' => 17],
			['id' => 18],
			['id' => 19]
		);

		$response = new JsonResponse();
		$response->setData($data);

		return $response;
	}
}
