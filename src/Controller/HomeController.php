<?php

namespace App\Controller;


use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home.index', methods: ['GET'])]
    public function index(ProduitRepository $produitRepository, CategorieRepository $categorieRepository): Response
    {

        return $this->render('/home.html.twig', [
            'produit' => $produitRepository->findAll(),
            'categorie' => $categorieRepository->findAll()
        ]);
    }

    #[Route('/entreprise', name: 'entreprise')]
    public function entreprise(ProduitRepository $produitRepository, CategorieRepository $categorieRepository): Response
    {
        return $this->render('/entreprise.html.twig', [
            'produit' => $produitRepository->findAll(),
            'categorie' => $categorieRepository->findAll()
        ]);
    }


    #[Route('/produit/{id}', 'detail.produit', methods: ['GET'])]
    public function detailproduit(ProduitRepository $produitRepository, int $id): Response
    {


        return $this->render('/produit/detailproduit.html.twig', [
            'produit' => $produitRepository->findOneBy( ['id' => $id] )

        ]);

    }

}
