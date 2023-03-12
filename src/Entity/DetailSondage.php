<?php

namespace App\Entity;

use App\Repository\DetailSondageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DetailSondageRepository::class)]
class DetailSondage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Sondage $Sondage = null;

    #[ORM\ManyToOne(inversedBy: 'detailSondages')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Aliment $Aliment = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSondage(): ?Sondage
    {
        return $this->Sondage;
    }

    public function setSondage(Sondage $Sondage): self
    {
        $this->Sondage = $Sondage;

        return $this;
    }

    public function getAliment(): ?Aliment
    {
        return $this->Aliment;
    }

    public function setAliment(?Aliment $Aliment): self
    {
        $this->Aliment = $Aliment;

        return $this;
    }
}
