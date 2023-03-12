<?php

namespace App\Entity;

use App\Repository\SondageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SondageRepository::class)]
class Sondage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'sondages')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Utilisateur $IdUtilisateur = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    private ?\DateTimeInterface $DateCreation = null;

    #[ORM\ManyToOne(inversedBy: 'sondages')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Aliment $Aliment1 = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Aliment $Aliment2 = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Aliment $Aliment3 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUtilisateur(): ?Utilisateur
    {
        return $this->IdUtilisateur;
    }

    public function setIdUtilisateur(?Utilisateur $IdUtilisateur): self
    {
        $this->IdUtilisateur = $IdUtilisateur;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->DateCreation;
    }

    public function setDateCreation(\DateTimeInterface $DateCreation): self
    {
        $this->DateCreation = $DateCreation;

        return $this;
    }

    public function getAliment1(): ?Aliment
    {
        return $this->Aliment1;
    }

    public function setAliment1(?Aliment $Aliment1): self
    {
        $this->Aliment1 = $Aliment1;

        return $this;
    }

    public function getAliment2(): ?Aliment
    {
        return $this->Aliment2;
    }

    public function setAliment2(?Aliment $Aliment2): self
    {
        $this->Aliment2 = $Aliment2;

        return $this;
    }

    public function getAliment3(): ?Aliment
    {
        return $this->Aliment3;
    }

    public function setAliment3(?Aliment $Aliment3): self
    {
        $this->Aliment3 = $Aliment3;

        return $this;
    }
}
