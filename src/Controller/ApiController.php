<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ApiController extends AbstractController
{
    /**
     * @var Serializer  One serializer for all. 
     */
    private $serializer;


    /**
     * Constructor of class
     */
    public function __construct()
    {
        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        
        $this->serializer = new Serializer($normalizers, $encoders);
    }


    /**
     * @Route("/api", name="api")
     */
    public function index()
    {
        return $this->render('api/index.html.twig', [
            'title' => 'ApiController',
        ]);
    }

    /**
     * Getter for serializer.
     *
     * @return  Serializer  serializer object
     */
    public function getSerializer()
    {
        return $this->serializer;
    }
}
