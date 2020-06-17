<?php

namespace App\Controller\Api\Rest;

use App\Controller\ApiController;
use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class User extends ApiController
{
	/**
	 * Gets user data
	 *
	 * @Route(
	 * 	"/api/rest/users/{id<\d+>?-1}",
	 * 	name="user_get",
	 * 	methods={"GET"})
	 *
	 * @return	JsonResponse	JSON-formatted user data
	 */
	public function get(string $id): JsonResponse
	{
		if ($id == -1) {
			$data = $this->getDoctrine()->getRepository(Users::class)->findAll();
		} else {
			$data = $this->getDoctrine()->getRepository(Users::class)->find($id);
		}

		if (!$data) {
			throw $this->createNotFoundException('No user found for id '.$id);
		}

		return JsonResponse::fromJsonString($this->getSerializer()->serialize($data, 'json'));
	}
}
