<?php

namespace App\Entity;

use App\Repository\AlimentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AlimentRepository::class)]
class Aliment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $NomFr = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NomScientifique = null;

    #[ORM\ManyToOne(inversedBy: 'aliments')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Groupe $Groupe = null;

    #[ORM\ManyToOne(inversedBy: 'aliments')]
    #[ORM\JoinColumn(nullable: false)]
    private ?SousGroupe $SousGroupe = null;

    #[ORM\ManyToOne(inversedBy: 'aliments')]
    #[ORM\JoinColumn(nullable: false)]
    private ?SousSousGroupe $SousSousGroupe = null;

    #[ORM\OneToOne(inversedBy: 'aliment', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?InformationNutritionelle $InformationNutritionelle = null;

    #[ORM\OneToMany(mappedBy: 'Aliment', targetEntity: DetailSondage::class)]
    private Collection $detailSondages;

    public function __construct()
    {
        $this->detailSondages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomFr(): ?string
    {
        return $this->NomFr;
    }

    public function setNomFr(string $NomFr): self
    {
        $this->NomFr = $NomFr;

        return $this;
    }

    public function getNomScientifique(): ?string
    {
        return $this->NomScientifique;
    }

    public function setNomScientifique(?string $NomScientifique): self
    {
        $this->NomScientifique = $NomScientifique;

        return $this;
    }

    public function getGroupe(): ?Groupe
    {
        return $this->Groupe;
    }

    public function setGroupe(?Groupe $Groupe): self
    {
        $this->Groupe = $Groupe;

        return $this;
    }

    public function getSousGroupe(): ?SousGroupe
    {
        return $this->SousGroupe;
    }

    public function setSousGroupe(?SousGroupe $SousGroupe): self
    {
        $this->SousGroupe = $SousGroupe;

        return $this;
    }

    public function getSousSousGroupe(): ?SousSousGroupe
    {
        return $this->SousSousGroupe;
    }

    public function setSousSousGroupe(?SousSousGroupe $SousSousGroupe): self
    {
        $this->SousSousGroupe = $SousSousGroupe;

        return $this;
    }

    public function getInformationNutritionelle(): ?InformationNutritionelle
    {
        return $this->InformationNutritionelle;
    }

    public function setInformationNutritionelle(InformationNutritionelle $InformationNutritionelle): self
    {
        $this->InformationNutritionelle = $InformationNutritionelle;

        return $this;
    }

    /**
     * @return Collection<int, DetailSondage>
     */
    public function getDetailSondages(): Collection
    {
        return $this->detailSondages;
    }

    public function addDetailSondage(DetailSondage $detailSondage): self
    {
        if (!$this->detailSondages->contains($detailSondage)) {
            $this->detailSondages->add($detailSondage);
            $detailSondage->setAliment($this);
        }

        return $this;
    }

    public function removeDetailSondage(DetailSondage $detailSondage): self
    {
        if ($this->detailSondages->removeElement($detailSondage)) {
            // set the owning side to null (unless already changed)
            if ($detailSondage->getAliment() === $this) {
                $detailSondage->setAliment(null);
            }
        }

        return $this;
    }
}
