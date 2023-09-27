<?php

namespace App\Entity;

use App\Repository\FournisseurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FournisseurRepository::class)]
class Fournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $fou_nom = null;

    #[ORM\Column(length: 255)]
    private ?string $fou_adresse = null;

    #[ORM\Column(length: 10)]
    private ?string $fou_dep = null;

    #[ORM\Column(length: 100)]
    private ?string $fou_ville = null;

    #[ORM\Column(length: 50)]
    private ?string $fou_pays = null;

    #[ORM\Column(length: 15)]
    private ?string $fou_telephone = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFouNom(): ?string
    {
        return $this->fou_nom;
    }

    public function setFouNom(string $fou_nom): static
    {
        $this->fou_nom = $fou_nom;

        return $this;
    }

    public function getFouAdresse(): ?string
    {
        return $this->fou_adresse;
    }

    public function setFouAdresse(string $fou_adresse): static
    {
        $this->fou_adresse = $fou_adresse;

        return $this;
    }

    public function getFouDep(): ?string
    {
        return $this->fou_dep;
    }

    public function setFouDep(string $fou_dep): static
    {
        $this->fou_dep = $fou_dep;

        return $this;
    }

    public function getFouVille(): ?string
    {
        return $this->fou_ville;
    }

    public function setFouVille(string $fou_ville): static
    {
        $this->fou_ville = $fou_ville;

        return $this;
    }

    public function getFouPays(): ?string
    {
        return $this->fou_pays;
    }

    public function setFouPays(string $fou_pays): static
    {
        $this->fou_pays = $fou_pays;

        return $this;
    }

    public function getFouTelephone(): ?string
    {
        return $this->fou_telephone;
    }

    public function setFouTelephone(string $fou_telephone): static
    {
        $this->fou_telephone = $fou_telephone;

        return $this;
    }
}
