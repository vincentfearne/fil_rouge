<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientRepository::class)]
class Client
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $cli_id = null;

    #[ORM\Column(length: 13)]
    private ?string $cli_type = null;

    #[ORM\Column(length: 50)]
    private ?string $cli_prenom = null;

    #[ORM\Column(length: 50)]
    private ?string $cli_nom = null;

    #[ORM\Column(length: 15)]
    private ?string $cli_telephone = null;

    #[ORM\Column(length: 255)]
    private ?string $cli_mail = null;

    #[ORM\Column(length: 50)]
    private ?string $cli_mdp = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cli_photo = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCliId(): ?int
    {
        return $this->cli_id;
    }

    public function setCliId(int $cli_id): static
    {
        $this->cli_id = $cli_id;

        return $this;
    }

    public function getCliType(): ?string
    {
        return $this->cli_type;
    }

    public function setCliType(string $cli_type): static
    {
        $this->cli_type = $cli_type;

        return $this;
    }

    public function getCliPrenom(): ?string
    {
        return $this->cli_prenom;
    }

    public function setCliPrenom(string $cli_prenom): static
    {
        $this->cli_prenom = $cli_prenom;

        return $this;
    }

    public function getCliNom(): ?string
    {
        return $this->cli_nom;
    }

    public function setCliNom(string $cli_nom): static
    {
        $this->cli_nom = $cli_nom;

        return $this;
    }

    public function getCliTelephone(): ?string
    {
        return $this->cli_telephone;
    }

    public function setCliTelephone(string $cli_telephone): static
    {
        $this->cli_telephone = $cli_telephone;

        return $this;
    }

    public function getCliMail(): ?string
    {
        return $this->cli_mail;
    }

    public function setCliMail(string $cli_mail): static
    {
        $this->cli_mail = $cli_mail;

        return $this;
    }

    public function getCliMdp(): ?string
    {
        return $this->cli_mdp;
    }

    public function setCliMdp(string $cli_mdp): static
    {
        $this->cli_mdp = $cli_mdp;

        return $this;
    }

    public function getCliPhoto(): ?string
    {
        return $this->cli_photo;
    }

    public function setCliPhoto(?string $cli_photo): static
    {
        $this->cli_photo = $cli_photo;

        return $this;
    }
}
