<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $com_prix = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $com_date = null;


    #[ORM\Column(length: 10, nullable: true)]
    private ?string $com_statut = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $com_paiement = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $com_fac_ref = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $com_fac_date = null;

    #[ORM\ManyToOne]
    private ?Adresse $ad = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $com_date_exp = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getComPrix(): ?float
    {
        return $this->com_prix;
    }

    public function setComPrix(float $com_prix): static
    {
        $this->com_prix = $com_prix;

        return $this;
    }

    public function getComDate(): ?\DateTimeInterface
    {
        return $this->com_date;
    }

    public function setComDate(\DateTimeInterface $com_date): static
    {
        $this->com_date = $com_date;

        return $this;
    }

    public function getComStatut(): ?string
    {
        return $this->com_statut;
    }

    public function setComStatut(?string $com_statut): static
    {
        $this->com_statut = $com_statut;

        return $this;
    }

    public function getComPaiement(): ?string
    {
        return $this->com_paiement;
    }

    public function setComPaiement(?string $com_paiement): static
    {
        $this->com_paiement = $com_paiement;

        return $this;
    }

    public function getComFacRef(): ?string
    {
        return $this->com_fac_ref;
    }

    public function setComFacRef(?string $com_fac_ref): static
    {
        $this->com_fac_ref = $com_fac_ref;

        return $this;
    }

    public function getComFacDate(): ?\DateTimeInterface
    {
        return $this->com_fac_date;
    }

    public function setComFacDate(?\DateTimeInterface $com_fac_date): static
    {
        $this->com_fac_date = $com_fac_date;

        return $this;
    }

    public function getAd(): ?Adresse
    {
        return $this->ad;
    }

    public function setAd(?Adresse $ad): static
    {
        $this->ad = $ad;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getComDateExp(): ?\DateTimeInterface
    {
        return $this->com_date_exp;
    }

    public function setComDateExp(?\DateTimeInterface $com_date_exp): static
    {
        $this->com_date_exp = $com_date_exp;

        return $this;
    }
}
