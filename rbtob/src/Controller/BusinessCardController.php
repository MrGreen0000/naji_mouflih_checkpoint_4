<?php

namespace App\Controller;

use App\Form\BusinessCardType;
use App\Entity\BusinessCard;
use App\Repository\BusinessCardRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;



class BusinessCardController extends AbstractController
{
    #[Route('/new/', name: 'new')]
    public function new(Request $request, BusinessCardRepository $businessCardRepository): Response
    {
        $businessCard = new BusinessCard();

        // Create the form, linked with $
        $form = $this->createForm(BusinessCardType::class, $businessCard);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $businessCardRepository->add($businessCard, true);
        
            return $this->redirectToRoute('app_home');
        }
        
        // Render the form (best practice)
        return $this->renderForm('businessCard/new.html.twig', [
            'form' => $form,
        ]);

    }

    #[Route('/businessCard/', name: 'app_businessCard')]
    public function show(BusinessCardRepository $businessCardRepository): Response
    {
        $businessCards = $businessCardRepository->findAll();

        return $this->render('businessCard/index.html.twig', [
            'businessCards' => $businessCards,
        ]);

    }


   
}