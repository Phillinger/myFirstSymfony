<?php

namespace App\Controller\Api\Rest;

use App\Controller\ApiController;
use App\Entity\Orders;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class Order extends ApiController
{
	/**
	 * Gets order data
	 *
	 * @Route(
	 * 	"/api/rest/orders/{id<\d+>?-1}",
	 * 	name="order_get",
	 * 	methods={"GET"})
	 *
	 * @return	JsonResponse	JSON-formatted order data
	 */
	public function get(string $id): JsonResponse
	{
		if ($id == -1) {
			$data = $this->getDoctrine()->getRepository(Orders::class)->findAll();
		} else {
			$data = $this->getDoctrine()->getRepository(Orders::class)->find($id);
		}

		if (!$data) {
			throw $this->createNotFoundException('No order found for id '.$id);
		}

		return JsonResponse::fromJsonString($this->getSerializer()->serialize($data, 'json'));
	}
}
