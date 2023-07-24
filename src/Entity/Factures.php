<?php

namespace App\Entity;

use App\Repository\FacturesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FacturesRepository::class)]
class Factures
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Reference = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Date_Facturation = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Date_Echeance = null;

    #[ORM\Column(length: 255)]
    private ?string $Condition_Reglement = null;

    #[ORM\Column]
    private ?float $Total_HT = null;

    #[ORM\Column(length: 255)]
    private ?string $Mode_Reglement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?string
    {
        return $this->Reference;
    }

    public function setReference(string $Reference): static
    {
        $this->Reference = $Reference;

        return $this;
    }

    public function getDateFacturation(): ?\DateTimeInterface
    {
        return $this->Date_Facturation;
    }

    public function setDateFacturation(\DateTimeInterface $Date_Facturation): static
    {
        $this->Date_Facturation = $Date_Facturation;

        return $this;
    }

    public function getDateEcheance(): ?\DateTimeInterface
    {
        return $this->Date_Echeance;
    }

    public function setDateEcheance(\DateTimeInterface $Date_Echeance): static
    {
        $this->Date_Echeance = $Date_Echeance;

        return $this;
    }

    public function getConditionReglement(): ?string
    {
        return $this->Condition_Reglement;
    }

    public function setConditionReglement(string $Condition_Reglement): static
    {
        $this->Condition_Reglement = $Condition_Reglement;

        return $this;
    }

    public function getTotalHT(): ?float
    {
        return $this->Total_HT;
    }

    public function setTotalHT(float $Total_HT): static
    {
        $this->Total_HT = $Total_HT;

        return $this;
    }

    public function getModeReglement(): ?string
    {
        return $this->Mode_Reglement;
    }

    public function setModeReglement(string $Mode_Reglement): static
    {
        $this->Mode_Reglement = $Mode_Reglement;

        return $this;
    }
}
