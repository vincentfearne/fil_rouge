<?php

namespace App\DataFixtures;

use Faker\Factory;
use Faker\Generator;
use App\Entity\Client;
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


        $type = array("particulier", "professionnel");
        for ($i = 0; $i < 50; $i++) {
            $client = new Client();
            $client->setCliType($type[array_rand($type)]);
            $client->setCliPrenom($this->faker->firstName($gender = 'male'|'female'));
            $client->setCliNom($this->faker->lastName());
            $client->setCliTelephone($this->faker->e164PhoneNumber());
            $client->setCliMail($this->faker->email());
            $client->setCliMdp($this->faker->password(6, 20));
            $client->setCliPhoto(null);
            $manager->persist($client);
         

                for ($j = 0; $j < 2; $j++) {
                    $adresse = new Adresse();
                    $adresse->setAdAdresse($this->faker->streetAddress());
                    $adresse->setAdDep($this->faker->postcode());
                    $adresse->setAdVille($this->faker->city());
                    $adresse->setAdPays($this->faker->country());
                    $adresse->setCliId($client);
                    $manager->persist($adresse);
                }
        }

        for ($i = 0; $i < 5; $i++){
            $categorie = new Categorie();
            $categorie->setCatNom($this->faker->word());
            $categorie->setCatPhoto($this->faker->imageURL());
            $categorie->setCat(null);
            $manager->persist($categorie);

            for ($j = 0; $j < 2; $j++){
                $cat = new Categorie();
                $cat->setCatNom($this->faker->word());
                $cat->setCatPhoto($this->faker->imageURL());
                $cat->setCat($categorie);
                $manager->persist($cat);
            }
        }

        for ($i = 0; $i < 20; $i++) {
            $fournisseur = new Fournisseur();
            $fournisseur->setFouNom($this->faker->company());
            $fournisseur->setFouAdresse($this->faker->streetAddress());
            $fournisseur->setFouDep($this->faker->postcode());
            $fournisseur->setFouVille($this->faker->city());
            $fournisseur->setFouPays($this->faker->country());
            $fournisseur->setFouTelephone($this->faker->e164PhoneNumber());
            $manager->persist($fournisseur);
         }

        $manager->flush();
    }
}
