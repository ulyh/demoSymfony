<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Produit;

class ProduitController extends AbstractController
{
    #[Route(['/', '/produit'], name: 'produit')]
    public function index(): Response
    {
        $repo = $this->getDoctrine()->getRepository(Produit::class);
        $produits = $repo->findAll();
        return $this->render('produit/index.html.twig', [
            'produits' => $produits,
        ]);
    }
    #[Route('/produit/{id}', name: 'produit_afficher')]
    public function afficher(int $id): Response
    {
        $repo = $this->getDoctrine()->getRepository(Produit::class);
        $produit = $repo->find($id);
        return $this->render('produit/afficher.html.twig', [
            'produit' => $produit,
        ]);
    }
}
