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

    #[ORM\Column]
    private ?int $cat_id = null;

    #[ORM\Column(length: 50)]
    private ?string $cat_nom = null;

    #[ORM\Column(length: 255)]
    private ?string $cat_photo = null;

    #[ORM\ManyToOne(targetEntity: self::class)]
    private ?self $cat_id_1 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCatId(): ?int
    {
        return $this->cat_id;
    }

    public function setCatId(int $cat_id): static
    {
        $this->cat_id = $cat_id;

        return $this;
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

    public function setCatPhoto(string $cat_photo): static
    {
        $this->cat_photo = $cat_photo;

        return $this;
    }

    public function getCatId1(): ?self
    {
        return $this->cat_id_1;
    }

    public function setCatId1(?self $cat_id_1): static
    {
        $this->cat_id_1 = $cat_id_1;

        return $this;
    }
}
