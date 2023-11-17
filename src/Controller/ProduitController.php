<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/produit', name: 'app_produit')]
class ProduitController extends AbstractController
{

    #[Route('/produit/{id}', 'detail.produit', methods: ['GET'])]
    public function detailproduit(ProduitRepository $produitRepository): Response
    {
        return $this->render('/produit/detailproduit.html.twig');
    }


}
