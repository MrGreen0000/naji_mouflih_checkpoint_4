<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BusinessCardController extends AbstractController
{
    #[Route('/businessCard/', name: 'app_businessCard')]
    public function index(): Response
    {
        return $this->render('businessCard/index.html.twig');
    }
}