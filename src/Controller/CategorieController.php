<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    #[Route('/categorie', name: 'app_categorie')]
    public function index(CategorieRepository $repository): Response
    {
        return $this->render('categorie/index.html.twig', [
            'categorie' => $repository->findAll()
        ]);
    }

    #[Route('/categorie/{id}', 'sous.categorie', methods: ['GET'])]
    public function souscategorie(CategorieRepository $categorieRepository, Categorie $categorie): Response
    {
        $souscategorie = $categorieRepository->findBy(["cat" => $categorie->getId()]);
        return $this->render('/souscategorie.html.twig', ['categorie' => $souscategorie]);

    }

    #[Route('/categorie/{id}/detail', 'detail.categorie', methods: ['GET'])]
    public function detailcategorie(ProduitRepository $produitRepository, Categorie $categorie): Response
    {
        $detailcategorie = $produitRepository->findBy(["cat" => $categorie->getId()]);
        return $this->render('/categorie/detailcategorie.html.twig', ['produit' => $detailcategorie]);
    }

    #[Route('/produit/{id}', 'detail.produit', methods: ['GET'])]
    public function detailproduit(ProduitRepository $produitRepository): Response
    {
        return $this->render('/produit/detailproduit.html.twig');
    }


    public function load_categories(CategorieRepository $repository): Response
    {
        return $this->render('partials/categoriesnavbar.html.twig', [
            'categorie' => $repository->findAll()
        ]);
    }

}

