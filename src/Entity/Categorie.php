<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $cat_nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cat_photo = null;

    #[ORM\Column(length: 1000, nullable: true)]
    private ?string $cat_description = null;

    #[ORM\ManyToOne(targetEntity: self::class)]
    private ?self $cat = null;

    #[ORM\OneToMany(mappedBy: 'categorie', targetEntity: Produit::class, orphanRemoval: true)]
    private Collection $produit;

    public function __construct()
    {
        $this->produit = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCatNom(): ?string
    {
        return $this->cat_nom;
    }

    public function setCatNom(string $cat_nom): static
    {
        $this->cat_nom = $cat_nom;

        return $this;
    }

    public function getCatPhoto(): ?string
    {
        return $this->cat_photo;
    }

    public function setCatPhoto(?string $cat_photo): static
    {
        $this->cat_photo = $cat_photo;

        return $this;
    }

    public function getCat(): ?self
    {
        return $this->cat;
    }

    public function setCat(?self $cat): static
    {
        $this->cat = $cat;

        return $this;
    }

    public function getCatDescription(): ?string
    {
        return $this->cat_description;
    }

    public function setCatDescription(string $cat_description): static
    {
        $this->cat_description = $cat_description;

        return $this;
    }

    public function getProduit(): Collection
    {
        return $this->produit;
    }
}
