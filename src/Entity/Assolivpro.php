<?php

namespace App\Entity;

use App\Repository\AssolivproRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AssolivproRepository::class)]
class Assolivpro
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    private ?Produit $pro_id = null;

    #[ORM\ManyToOne]
    private ?Livraison $liv_id = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLivId(): ?Livraison
    {
        return $this->liv_id;
    }

    public function setLivId(?Livraison $liv_id): static
    {
        $this->liv_id = $liv_id;

        return $this;
    }
}
