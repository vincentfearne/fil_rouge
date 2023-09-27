<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
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

    #[ORM\ManyToOne(targetEntity: self::class)]
    private ?self $cat = null;

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
}
