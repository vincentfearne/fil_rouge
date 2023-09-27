<?php

namespace App\Entity;

use App\Repository\LivraisonRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivraisonRepository::class)]
class Livraison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $liv_ship_date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $liv_reception_date = null;

    #[ORM\ManyToOne]
    private ?Commande $com = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLivShipDate(): ?\DateTimeInterface
    {
        return $this->liv_ship_date;
    }

    public function setLivShipDate(?\DateTimeInterface $liv_ship_date): static
    {
        $this->liv_ship_date = $liv_ship_date;

        return $this;
    }

    public function getLivReceptionDate(): ?\DateTimeInterface
    {
        return $this->liv_reception_date;
    }

    public function setLivReceptionDate(?\DateTimeInterface $liv_reception_date): static
    {
        $this->liv_reception_date = $liv_reception_date;

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
