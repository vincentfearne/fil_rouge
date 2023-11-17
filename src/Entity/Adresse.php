<?php

namespace App\Entity;

use App\Repository\AdresseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdresseRepository::class)]
class Adresse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $ad_adresse = null;

    #[ORM\Column(length: 10)]
    private ?string $ad_dep = null;

    #[ORM\Column(length: 100)]
    private ?string $ad_ville = null;

    #[ORM\Column(length: 50)]
    private ?string $ad_pays = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAdAdresse(): ?string
    {
        return $this->ad_adresse;
    }

    public function setAdAdresse(string $ad_adresse): static
    {
        $this->ad_adresse = $ad_adresse;

        return $this;
    }

    public function getAdDep(): ?string
    {
        return $this->ad_dep;
    }

    public function setAdDep(string $ad_dep): static
    {
        $this->ad_dep = $ad_dep;

        return $this;
    }

    public function getAdVille(): ?string
    {
        return $this->ad_ville;
    }

    public function setAdVille(string $ad_ville): static
    {
        $this->ad_ville = $ad_ville;

        return $this;
    }

    public function getAdPays(): ?string
    {
        return $this->ad_pays;
    }

    public function setAdPays(string $ad_pays): static
    {
        $this->ad_pays = $ad_pays;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->user_id_id;
    }

    public function setUserId(?User $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
    }
}
