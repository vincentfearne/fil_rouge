<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $pro_id = null;

    #[ORM\Column(length: 50)]
    private ?string $pro_libelle = null;

    #[ORM\Column(length: 255)]
    private ?string $pro_description = null;

    #[ORM\Column]
    private ?float $pro_prix = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pro_photo = null;

    #[ORM\Column(length: 50)]
    private ?string $pro_ref = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Categorie $cat_id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Fournisseur $fou_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProId(): ?int
    {
        return $this->pro_id;
    }

    public function setProId(int $pro_id): static
    {
        $this->pro_id = $pro_id;

        return $this;
    }

    public function getProLibelle(): ?string
    {
        return $this->pro_libelle;
    }

    public function setProLibelle(string $pro_libelle): static
    {
        $this->pro_libelle = $pro_libelle;

        return $this;
    }

    public function getProDescription(): ?string
    {
        return $this->pro_description;
    }

    public function setProDescription(string $pro_description): static
    {
        $this->pro_description = $pro_description;

        return $this;
    }

    public function getProPrix(): ?float
    {
        return $this->pro_prix;
    }

    public function setProPrix(float $pro_prix): static
    {
        $this->pro_prix = $pro_prix;

        return $this;
    }

    public function getProPhoto(): ?string
    {
        return $this->pro_photo;
    }

    public function setProPhoto(?string $pro_photo): static
    {
        $this->pro_photo = $pro_photo;

        return $this;
    }

    public function getProRef(): ?string
    {
        return $this->pro_ref;
    }

    public function setProRef(string $pro_ref): static
    {
        $this->pro_ref = $pro_ref;

        return $this;
    }

    public function getCatId(): ?Categorie
    {
        return $this->cat_id;
    }

    public function setCatId(?Categorie $cat_id): static
    {
        $this->cat_id = $cat_id;

        return $this;
    }

    public function getFouId(): ?Fournisseur
    {
        return $this->fou_id;
    }

    public function setFouId(?Fournisseur $fou_id): static
    {
        $this->fou_id = $fou_id;

        return $this;
    }
}
