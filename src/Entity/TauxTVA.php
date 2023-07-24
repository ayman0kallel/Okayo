<?php

namespace App\Entity;

use App\Repository\TauxTVARepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TauxTVARepository::class)]
class TauxTVA
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $Taux = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Date_debut_validite = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $Date_Fin_Validite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTaux(): ?float
    {
        return $this->Taux;
    }

    public function setTaux(float $Taux): static
    {
        $this->Taux = $Taux;

        return $this;
    }

    public function getDateDebutValidite(): ?\DateTimeInterface
    {
        return $this->Date_debut_validite;
    }

    public function setDateDebutValidite(\DateTimeInterface $Date_debut_validite): static
    {
        $this->Date_debut_validite = $Date_debut_validite;

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
