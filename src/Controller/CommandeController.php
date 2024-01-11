<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Detail;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/commande', name: 'app_orders_')]
class CommandeController extends AbstractController
{
    #[Route('/ajout', name: 'add')]
    public function add(SessionInterface $session, ProduitRepository $produitRepository, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $panier = $session->get('panier', []);

        if($panier === []){
            $this->addFlash('message', 'Votre panier est vide');
            return $this->redirectToRoute('home.index');
        }


        //Si le panier n'est pas vide, on crée la commande
        $commande = new Commande();

        //On remplit la commannde
        $commande->setUser($this->getUser());
        $commande->setComFacRef(uniqid());
        $commande->setComPrix(1.6);
        $commande->setComDate(new \DateTimeImmutable());

        //On parcourt le panier pour créer les détails de commande
        foreach($panier as $item => $quantite){
            $detail = new Detail();

            //On va chercher le produit
            $produit = $produitRepository->find($item);

            $prix = $produit->getProPrix();

            //On crée le détail de la commande
            $detail->setPro($produit);
            $detail->setDetProPrix($prix);
            $detail->setDetQte($quantite);

        }

        //On persist et on flush
        $entityManager->persist($commande);
        $entityManager->flush();
        
        $session->remove('panier');

        $this->addFlash('message', 'commande crée avec succès');
        return $this->redirectToRoute('home.index');


    }
}
