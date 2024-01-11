<?php

namespace App\Controller;

use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/produit', name: 'admin_produit_')]
class CRUDProduitController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('/admin/index.html.twig');
    }

    #[Route('/ajout', name: 'add')]
    public function add(): Response
    {
        return $this->render('/admin/index.html.twig');
    }

    #[Route('/edition/{id}', name: 'edit')]
    public function edit(Produit $produit): Response
    {
        return $this->render('/admin/index.html.twig');
    }

    #[Route('/suppression/{id}', name: 'delete')]
    public function delete(Produit $produit): Response
    {
        return $this->render('/admin/index.html.twig');
    }


}
