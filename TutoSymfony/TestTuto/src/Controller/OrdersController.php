<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Orders;

class OrdersController extends AbstractController
{
    /**
     * @Route("/orders", name="orders")
     */
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Orders::class);
        $ord = $repo->findAll();
        return $this->render('orders/index.html.twig', ['orders' => $ord]);
    }
}
