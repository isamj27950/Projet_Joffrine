<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LeopartController extends AbstractController
{
    #[Route('/leopart', name: 'app_leopart')]
    public function index(): Response
    {
        return $this->render('leopart/index.html.twig', [
            'controller_name' => 'LeopartController',
        ]);
    }
}
