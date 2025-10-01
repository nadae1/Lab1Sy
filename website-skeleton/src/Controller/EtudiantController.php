<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
   /* /**
     * @Route("/etudiant/{id}", name="afficher_etudiant", requirements={"id"="\d{2}"})
     */
    #[Route('/etudiant', name: 'etudiant')]
    public function index(): Response
    {
        return new Response('Bonjour mes etudiantss :) ');
    }
/*
    /**
     * @Route("/etudiant/{id}", name="afficherEtudiant", requirements={"id"="\d{2}"})
     */

    #[Route('/etudiant/Id/{id}', name: 'AfficherEtudiant' , requirements: ['id' => '\d{2}'])]

    public function afficherEtudiant($id): Response
    {
      return new Response("Bonjour l'etudiant numero " .$id);
    }
/*
    /**
     * @Route("/etudiant/voir-name/{name}", name="voir_etudiant")
     */


    #[Route('/etudiant/VoirEtudiant/{name}', name: 'VoirEtudiant')]

    public function voirName(string $name): Response
    {
        return $this->render('etudiant/etudiant.html.twig', [
            'name' => $name,
        ]);
    }
}