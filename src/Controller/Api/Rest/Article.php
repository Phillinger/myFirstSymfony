<?php

namespace App\Controller\Api\Rest;

use App\Controller\ApiController;
use App\Entity\Articles;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class Article extends ApiController
{
	/**
	 * Gets article data
	 *
	 * @Route(
	 * 	"/api/rest/articles/{id<\d+>?-1}",
	 * 	name="article_get",
	 * 	methods={"GET"})
	 *
	 * @return	JsonResponse	JSON-formatted article data
	 */
	public function get(string $id): JsonResponse
	{
		if ($id == -1) {
			return $this->get_last_ten();
		}

		$data = $this->getDoctrine()->getRepository(Articles::class)->find($id);

		if (!$data) {
			throw $this->createNotFoundException('No article found for id '.$id);
		}

		return JsonResponse::fromJsonString($this->getSerializer()->serialize($data, 'json'));
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
