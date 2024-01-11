<?php

namespace App\Entity;

use App\Repository\DetailRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity(repositoryClass: DetailRepository::class)]
#[ApiResource]
class Detail
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $det_qte = null;

    #[ORM\Column]
    private ?float $det_pro_prix = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Produit $pro = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Commande $com = null;

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

    public function getDetProPrix(): ?float
    {
        return $this->det_pro_prix;
    }

    public function setDetProPrix(float $det_pro_prix): static
    {
        $this->det_pro_prix = $det_pro_prix;

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

    public function getCom(): ?Commande
    {
        return $this->com;
    }

    public function setCom(?Commande $com): static
    {
        $this->com = $com;

        return $this;
    }
}
