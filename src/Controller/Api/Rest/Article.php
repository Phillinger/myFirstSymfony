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
			$data = $this->getDoctrine()->getRepository(Articles::class)->findAll();
		} else {
			$data = $this->getDoctrine()->getRepository(Articles::class)->find($id);
		}

		if (!$data) {
			throw $this->createNotFoundException('No order found for id '.$id);
		}

		return JsonResponse::fromJsonString($this->getSerializer()->serialize($data, 'json'));
	}
}
