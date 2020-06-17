<?php

namespace App\Controller\Api\Rest;

use App\Entity\Articles;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Article extends AbstractController
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
		if ($id == -1)
			return $this->get_last_ten();

		// fetch data
		$oArticle = $this->getDoctrine()->getRepository(Articles::class)->find($id);

		if (!$oArticle) {
			throw $this->createNotFoundException('No article found for id '.$id);
		}

		echo '<pre>'; var_dump($oArticle); echo '</pre>';

		$response = new JsonResponse();
		$response->setData($oArticle);

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
