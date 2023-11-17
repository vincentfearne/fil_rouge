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

class AppFixtures2 extends Fixture
{

    private Generator $faker;
    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager): void
    {

            $c1 = new Categorie();
            $c1->setCatNom("Guitares");
            $c1->setCatPhoto('https://picsum.photos/200/300');
            $c1->setCat(null);
            $c1->setCatDescription("Retrouvez nos meilleures guitares...blabla");
            $manager->persist($c1);

                $sc1 = new Categorie();
                $sc1->setCatNom("Guitares accoustiques");
                $sc1->setCatPhoto('https://picsum.photos/100/150');
                $sc1->setCat($c1);
                $sc1->setCatDescription("Nos guitares accoustiques sont blablabla");
                $manager->persist($sc1);

                $sc2 = new Categorie();
                $sc2->setCatNom("Guitares électriques");
                $sc2->setCatPhoto('https://picsum.photos/100/150');
                $sc2->setCat($c1);
                $sc2->setCatDescription("Nos guitares électriques sont blablabla");
                $manager->persist($sc2);


            $c2 = new Categorie();
            $c2->setCatNom("Pianos");
            $c2->setCatPhoto('https://picsum.photos/200/300');
            $c2->setCat(null);
            $c2->setCatDescription("Les pianos sont...blabla");
            $manager->persist($c2);


                $sc3 = new Categorie();
                $sc3->setCatNom("Pianos droits");
                $sc3->setCatPhoto('https://picsum.photos/100/150');
                $sc3->setCat($c2);
                $sc3->setCatDescription("Les pianos droits sont...blabla");
                $manager->persist($sc3);

                $sc4 = new Categorie();
                $sc4->setCatNom("Pianos à queues");
                $sc4->setCatPhoto('https://picsum.photos/100/150');
                $sc4->setCat($c2);
                $sc4->setCatDescription("Les pianosà queues sont...blabla");
                $manager->persist($sc4);


        for ($i = 0; $i < 50; $i++) {
            $fournisseur = new Fournisseur();
            $fournisseur->setFouNom($this->faker->company());
            $fournisseur->setFouAdresse($this->faker->streetAddress());
            $fournisseur->setFouDep($this->faker->postcode());
            $fournisseur->setFouVille($this->faker->city());
            $fournisseur->setFouPays($this->faker->country());
            $fournisseur->setFouTelephone($this->faker->e164PhoneNumber());
            $this->addReference('fournisseur' .$i, $fournisseur);
            $manager->persist($fournisseur);
         }

            $p1 = new Produit();
            $p1->setProLibelle("Guitare accoustique Ortega");
            $p1->setProPrix(185.54);
            $p1->setProDescription("Les guitares de la marque Ortega..blabla");
            $p1->setCat($c1);
            $p1->setProPhoto('https://picsum.photos/100/150');
            $p1->setProRef("6f5dhg4r984654");
            $p1->setFou($fournisseur);
            $manager->persist($p1);

                for ($i = 1; $i < 20; $i++) {
            $produit = new Produit();
            $produit->setProLibelle($this->faker->word());
            $produit->setProDescription($this->faker->text(100));
            $produit->setProPrix($this->faker->randomFloat());
            $produit->setProPhoto('https://picsum.photos/100/150');
            $produit->setProRef($this->faker->randomNumber(6, true));
            $produit->setCat($c1);
            $produit->setFou($this->getReference('fournisseur' .$i));
            $manager->persist($produit);
        }





        $manager->flush();
    }
}
