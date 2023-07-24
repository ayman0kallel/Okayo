<?php

namespace App\Entity;

use App\Repository\CatalogueRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CatalogueRepository::class)]
class Catalogue
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $Prix_UnitaireHT = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Date_Debut_Validite = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date_Fin_Validite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrixUnitaireHT(): ?float
    {
        return $this->Prix_UnitaireHT;
    }

    public function setPrixUnitaireHT(float $Prix_UnitaireHT): static
    {
        $this->Prix_UnitaireHT = $Prix_UnitaireHT;

        return $this;
    }

    public function getDateDebutValidite(): ?\DateTimeInterface
    {
        return $this->Date_Debut_Validite;
    }

    public function setDateDebutValidite(\DateTimeInterface $Date_Debut_Validite): static
    {
        $this->Date_Debut_Validite = $Date_Debut_Validite;

        return $this;
    }

    public function getDateFinValidite(): ?\DateTimeInterface
    {
        return $this->Date_Fin_Validite;
    }

    public function setDateFinValidite(?\DateTimeInterface $Date_Fin_Validite): static
    {
        $this->Date_Fin_Validite = $Date_Fin_Validite;

        return $this;
    }
}
