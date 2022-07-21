<?php

namespace App\Controller;

use App\Form\BusinessCardType;
use App\Entity\BusinessCard;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class BusinessCardController extends AbstractController
{
    #[Route('/new/', name: 'new')]
    public function new(): Response
    {
        $businessCard = new BusinessCard();

        // Create the form, linked with $
        $form = $this->createForm(BusinessCardType::class, $businessCard);
        
        // Render the form (best practice)
        return $this->renderForm('businessCard/new.html.twig', [
            'form' => $form,
        ]);

    }

    #[Route('/businessCard/', name: 'app_businessCard')]
    public function index(): Response
    {
        return $this->render('businessCard/index.html.twig');
    }

   
}