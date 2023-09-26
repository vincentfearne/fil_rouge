<?php

namespace App\Entity;

use App\Repository\DetailRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DetailRepository::class)]
class Detail
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $det_id = null;

    #[ORM\Column(nullable: true)]
    private ?int $det_qte = null;

    #[ORM\Column]
    private ?float $det_pro_prix = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Produit $pro_id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Commande $com_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDetId(): ?int
    {
        return $this->det_id;
    }

    public function setDetId(int $det_id): static
    {
        $this->det_id = $det_id;

        return $this;
    }

    public function getDetQte(): ?int
    {
        return $this->det_qte;
    }

    public function setDetQte(?int $det_qte): static
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

    public function getProId(): ?Produit
    {
        return $this->pro_id;
    }

    public function setProId(?Produit $pro_id): static
    {
        $this->pro_id = $pro_id;

        return $this;
    }

    public function getComId(): ?Commande
    {
        return $this->com_id;
    }

    public function setComId(?Commande $com_id): static
    {
        $this->com_id = $com_id;

        return $this;
    }
}
