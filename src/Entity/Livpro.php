<?php

namespace App\Entity;

use App\Repository\LivproRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity(repositoryClass: LivproRepository::class)]
#[ApiResource]
class Livpro
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $det_qte = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Produit $pro = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Livraison $liv = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDetQte(): ?int
    {
        return $this->det_qte;
    }

    public function setDetQte(int $det_qte): static
    {
        $this->det_qte = $det_qte;

        return $this;
    }

    public function getPro(): ?Produit
    {
        return $this->pro;
    }

    public function setPro(?Produit $pro): static
    {
        $this->pro = $pro;

        return $this;
    }

    public function getLiv(): ?Livraison
    {
        return $this->liv;
    }

    public function setLiv(?Livraison $liv): static
    {
        $this->liv = $liv;

        return $this;
    }
}
