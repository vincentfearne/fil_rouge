<?php

namespace App\DataFixtures;

use App\Entity\Commande;
use App\Entity\Livpro;
use App\Entity\Livraison;
use App\Entity\User;
use Faker\Factory;
use Faker\Generator;
use App\Entity\Client;
use App\Entity\Produit;
use App\Entity\Detail;
use App\Entity\Adresse;
use App\Entity\Categorie;
use App\Entity\Fournisseur;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
;

class AppFixtures extends Fixture
{

    private Generator $faker;
    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager): void
    {
//        for ($i = 0; $i < 50; $i++) {
//            $user = new User();
//            $user->setUsername($this->faker->lastName());
//            $user->setUserfirstname($this->faker->firstName($gender = 'male'|'female'));
//            $user->setPassword($this->faker->password());
//            $user->setUsermail($this->faker->email());
//            $user->setUserlastname($this->faker->lastName());
//            $this->addReference('user'. $i, $user);
//            $manager->persist($user);
//        }
//
//        for ($i = 0; $i < 50; $i++) {
//            $adresse = new Adresse();
//            $adresse->setAdAdresse($this->faker->streetAddress());
//            $adresse->setAdDep($this->faker->postcode());
//            $adresse->setAdVille($this->faker->city());
//            $adresse->setAdPays($this->faker->country());
//            $adresse->setUserId($this->getReference('user'. $i));
//            $this->addReference('adresse'. $i, $adresse);
//            $manager->persist($adresse);
//        }
//
//        for ($i = 0; $i < 20; $i++){
//            $categorie = new Categorie();
//            $categorie->setCatNom($this->faker->word());
//            $categorie->setCatPhoto('https://picsum.photos/200/300');
//            $categorie->setCat(null);
//            $manager->persist($categorie);
//
//            for ($j = 0; $j < 2; $j++){
//                $cat = new Categorie();
//                $cat->setCatNom($this->faker->word());
//                $cat->setCatPhoto('https://picsum.photos/100/150');
//                $cat->setCat($categorie);
//                $manager->persist($cat);
//            }
//            $this->addReference('categorie'. $i, $categorie);
//        }
//
//        for ($i = 0; $i < 50; $i++) {
//            $fournisseur = new Fournisseur();
//            $fournisseur->setFouNom($this->faker->company());
//            $fournisseur->setFouAdresse($this->faker->streetAddress());
//            $fournisseur->setFouDep($this->faker->postcode());
//            $fournisseur->setFouVille($this->faker->city());
//            $fournisseur->setFouPays($this->faker->country());
//            $fournisseur->setFouTelephone($this->faker->e164PhoneNumber());
//            $this->addReference('fournisseur' .$i, $fournisseur);
//            $manager->persist($fournisseur);
//         }
//
//        $statut = array("en cours", "expédiée", "livrée");
//        for ($i = 0; $i < 50; $i++) {
//            $commande = new Commande();
//            $commande->setComPrix($this->faker->randomFloat());
//            $commande->setComDate($this->faker->dateTime());
//            $commande->setComDateExp($this->faker->dateTimeBetween('-1 week', 'now'));
//            $commande->setComStatut($statut[array_rand($statut)]);
//            $commande->setComPaiement($this->faker->creditCardNumber());
//            $commande->setComFacRef($this->faker->randomNumber(6, true));
//            $commande->setComFacDate($this->faker->dateTime());
//            $commande->setUser($this->getReference('user'. $i));
//            $commande->setAd($this->getReference('adresse'. $i));
//            $this->addReference('commande' .$i, $commande);
//            $manager->persist($commande);
//        }
//
//        for ($i = 0; $i < 20; $i++) {
//            $produit = new Produit();
//            $produit->setProLibelle($this->faker->word());
//            $produit->setProDescription($this->faker->text(100));
//            $produit->setProPrix($this->faker->randomFloat());
//            $produit->setProPhoto($this->faker->imageUrl());
//            $produit->setProRef($this->faker->randomNumber(6, true));
//            $produit->setCat($this->getReference('categorie' .$i));
//            $produit->setFou($this->getReference('fournisseur' .$i));
//            $this->addReference('produit'. $i, $produit);
//            $manager->persist($produit);
//        }
//
//        for ($i = 0; $i < 20; $i++) {
//            $detail = new Detail();
//            $detail->setDetQte($this->faker->randomDigitNotNull());
//            $detail->setDetProPrix($this->faker->randomFloat(2, 1, 1000));
//            $detail->setPro($this->getReference('produit' .$i));
//            $detail->setCom($this->getReference('commande' .$i));
//            $manager->persist($detail);
//        }
//
//        for ($i = 0; $i < 20; $i++) {
//            $livraison = new Livraison();
//            $livraison->setLivShipDate($this->faker->dateTime());
//            $livraison->setLivReceptionDate($this->faker->dateTime());
//            $livraison->setCom($this->getReference('commande' .$i));
//            $this->addReference('livraison' .$i, $livraison);
//            $manager->persist($livraison);
//        }
//
//        for ($i = 0; $i < 20; $i++) {
//            $livpro = new Livpro();
//            $livpro->setDetQte($this->faker->randomDigitNotNull());
//            $livpro->setLiv($this->getReference('livraison' .$i));
//            $livpro->setPro($this->getReference('produit' .$i));
//            $manager->persist($livpro);
//        }
//        $manager->flush();
    }
}
