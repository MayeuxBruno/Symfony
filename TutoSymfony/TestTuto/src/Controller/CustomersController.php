<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Customers;

class CustomersController extends AbstractController
{
    /**
     * @Route("/customers", name="customers")
     */
    public function index(): Response
    {
            $repo = $this->getDoctrine()->getRepository(Customers::class);
            $cli = $repo->findAll();
            return $this->render('customers/index.html.twig', [
            'customers' => $cli
        ]);
    }
}
