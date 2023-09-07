<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     * @return Response
     */
    public function index(): Response
    {
        return new Response('hello World !');
        // return $this->render('accueil/index.html.twig', [
        //     'controller_name' => 'AccueilController',
        // ]);
    }
}
