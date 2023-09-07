<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil.index")
     */
    public function index(): Response
    {
        return $this->render('pages/voyages/accueil.html.twig', [
            'controller_name' => 'Hello World !',
        ]);
    }
}
